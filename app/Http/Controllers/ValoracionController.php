<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use DB;
use App\Order;
use App\OrderItem;
use App\Article;
use App\Valoracion;

class ValoracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valoraciones = Valoracion::all();
        $orders = Order::orderBy('id','DES')->paginate(200);
        return view("valoraciones.index")->with('orders', $orders, 'valoraciones', $valoraciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $valoraciones = Valoracion::all();
        $orders = Order::all();
        return view("valoraciones.crearvaloracion")->with('orders', $orders, 'valoraciones', $valoraciones);

    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {               		
                    $orders=request()->all();
                    $valoracion = new Valoracion($request->all());
                    $valoracion->order_id = $request->input('id');
                    $valoracion->user_id = \Auth::user()->id;

                    $valoracion->puntaje =  $request->input('puntaje');    
                    $valoracion ->save();

                    return redirect()->route("valoraciones.index");


}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
