<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Article;
use App\Shoppincart;
use DB;

class CartController extends Controller
{
    public function __construct()
    {
            if(! \Session::has('cart')  and \Session::put('cart',array()));
            //if (! Session :: has ('cart') || put (Session :: array ('cart')));

    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
          $cart = \Session::get('cart'); 
          $total = $this->total();
           return view('carts.cart', compact('cart', 'total'));

    }
    public function add(Article $article )
    { 
        
        $cart =\Session::get('cart');
        $article->quantity = 1;
        $cart[$article->id] = $article;
        \Session::put('cart', $cart);    
        return redirect()->route('cart-show');

    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  public function update(Request $request )
    {   
        
        $cart = \Session::get('cart');

        $cart[$request->input('id')]->quantity = $request->input('quantity') ;
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
         $cart = \Session::get('cart');
         unset ($cart[$article->id]);
         \Session::put('cart',$cart);
         
         return redirect()->route('cart-show');

    }

    public function trash()
    {
         \Session::forget('cart');
         
         return redirect()->route('cart-show');

    }
    public function total()
    {
        $cart = \Session::get('cart');
        $total = 0;
        foreach($cart as $item){
                $total += $item->pricing * $item->quantity;

        }
         return $total;   

    }
    

    public function orderDetail(Request $request)
    {

        if (Auth::check()) {

            if(count( \Session::get('cart')) <= 0 ) return redirect()->route('/home');
                $cart = \Session::get('cart');
                $total = $this->total();    
 
            return view('carts.orderDetail', compact ('cart','total'));     

        }else{
            return redirect()->route('login');
            
        }
     return "Intente nuevamente:)";
    }




}
