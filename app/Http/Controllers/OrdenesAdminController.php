<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use DB;
use App\Order;
use App\OrderItem;
use App\Article;

class OrdenesAdminController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::all();
        return view("ordenes.misordenes")->with('orders', $orders);
    }
}
