<?php 

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input; 


use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use App\Paypal;
use App\Order;
use App\OrderItem;
use App\Article;

use App\Shoppincart;
use DB;

class PayPalController extends BaseController
{	
	private $_api_context;

	public function __construct()
	{
		// setup PayPal api context
		
		$paypal_conf = \Config::get('paypal');
	
		require "../vendor/autoload.php";
		

		$this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
		$this->_api_context->setConfig($paypal_conf['settings']);

		
	}

	public function postPayment()
	{
		$payer = new Payer();
		$payer->setPaymentMethod('paypal');

		$items = array();
		$subtotal = 0;
		$cart = \Session::get('cart');
		$currency = 'USD';
		
		
		foreach($cart as $article){
			$item = new Item();
			
			$item->setName($article->name)
			->setCurrency($currency)
			->setDescription($article->extract)
			->setQuantity($article->quantity)
			->setPrice($article->pricing);

			$items[] = $item;
			$subtotal += $article->quantity * $article->pricing;
		}

		$item_list = new ItemList();
		$item_list->setItems($items);

		$details = new Details();
		$details->setSubtotal($subtotal)
		->setShipping(100);

		$total = $subtotal + 100;

		$amount = new Amount();
		$amount->setCurrency($currency)
			->setTotal($total)
			->setDetails($details);

		$transaction = new Transaction();
		$transaction->setAmount($amount)
			->setItemList($item_list)
			->setDescription('Pedido de prueba en mi Laravel App Store');

		$redirect_urls = new RedirectUrls();
		$redirect_urls->setReturnUrl(\URL::route('payment.status'))
			->setCancelUrl(\URL::route('payment.status'));

		$payment = new Payment();
		$payment->setIntent('Sale')
			->setPayer($payer)
			->setRedirectUrls($redirect_urls)
			->setTransactions(array($transaction));

		try {
			$payment->create($this->_api_context);
		} catch (\PayPal\Exception\PayPalConnectionException  $ex) {
			if (\Config::get('app.debug')) {
				echo "Exception: " . $ex->getMessage() . PHP_EOL;
				$err_data = json_decode($ex->getData(), true);
				dd($err_data);
				exit;
			} else {
				die('Ups! Algo salió mal');
			}
		}

		foreach($payment->getLinks() as $link) {
			if($link->getRel() == 'approval_url') {
				$redirect_url = $link->getHref();
				break;
			}
		}

		// add payment ID to session
		\Session::put('paypal_payment_id', $payment->getId());

		if(isset($redirect_url)) {
			// redirect to paypal
			return \Redirect::away($redirect_url);
		}

		return \Redirect::route('cart-show')
			->with('message', 'Ups! Error desconocido.');

	}

	public function getPaymentStatus(Request $request)
	{

		
		 $payment_id=request()->get('paymentId');
		// Get the payment ID before session clear
		 // clear the session payment ID
		\Session::forget('paypal_payment_id'); 
		$payerId=request()->get('PayerID');
		$token=request()->get('token');


		if (empty($payerId) || empty($token)) {
			/* return \Redirect::route('home')
				->with('message', 'Hubo un problema al intentar pagar con Paypal');
 */

				return view('partials.message' )
			->with('message', 'Hubo un problema al intentar pagar con Paypal');  
		}

		$payment = Payment::get($payment_id, $this->_api_context);

		$execution = new PaymentExecution();
		$execution->setPayerId(request()->get('PayerID'));

		$result = $payment->execute($execution, $this->_api_context);

		if ($result->getState() == 'approved') {

			$this->saveOrder();

			\Session::forget('cart');
			return view('partials.message2' )
			->with('message', 'La compra fue realizada con Exito');     

			/* return \Redirect::route('home')
				; */
		}
		/* return \Redirect::route('home')
			->with('message', 'La compra fue cancelada'); */

			return view('partials.message3' )
			->with('message', 'La compra fue cancelada');  
	}

	protected function saveOrder()
	{
		$subtotal = 0;
		$cart = \Session::get('cart');
		$shipping = 100;

		foreach($cart as $producto){
			$subtotal += $producto->quantity * $producto->pricing;
		}

		$order = Order::create([
			'subtotal' => $subtotal,
			'shipping' => $shipping,
			'user_id' => \Auth::user()->id
		]);

		foreach($cart as $producto){
			$this->saveOrderItem($producto, $order->id);
		}
	}

	protected function saveOrderItem($producto, $order_id)
	{
		OrderItem::create([
			'pricing' => $producto->pricing,
			'quantity' => $producto->quantity,
			'product_id' => $producto->id,
			'order_id' => $order_id
		]);
	}
}