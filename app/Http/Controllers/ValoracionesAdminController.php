<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use DB;
use App\Order;
use App\OrderItem;
use App\Article;
use App\Valoracion;

class ValoracionesAdminController extends Controller
{
    public function index(Request $request)
    {
        $valoraciones = Valoracion::all();
        $orders = Order::all();

        return view("valoraciones.index")->with('orders', $orders, 'valoraciones', $valoraciones);
    }

}
