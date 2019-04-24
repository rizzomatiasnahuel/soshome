<?php

namespace App\Http\Controllers;

use App\User;
use App\Lista;
use App\Http\Controllers\Controller;

class ListController extends Controller
{

    public function index()
    {
        $listas = Lista::all();
        return view('listas')->with('listas', $listas); ;
    }

    public function mobile()
    {
        $listas = Lista::all();
        return response()->json($listas);  
    }  

    /**
     * Update the specified user.
     *
     * @param  string  $id
     * @param  string  $name
     * @param  string  $price
     * @param  string  $number
     * @return Response
     */
    public function update($id, $name, $price, $number)
    {
        $flight = Lista::find($id);
        $list->name = $name;
        $list->price = $price;
        $list->number = $number;
        $flight->save();

        return response()->json([
            'status' => 'success',
        ]); 
    }

    /**
     * create the specified user.
     *
     * @param  string  $name
     * @param  string  $price
     * @param  string  $number
     * @return Response
     */
    public function create($name, $price, $number)
    {
        $list = new Lista;

        $list->name = $name;
        $list->price = $price;
        $list->number = $number;

        $list->save();

        return response()->json([
            'status' => 'success',
        ]);        
    }

    /**
     * create the specified user.
     *
     * @param  string  $id
     * @return Response
     */
    public function delete($id)
    {
        $list = Lista::find($id);
        $list->delete();

        return response()->json([
            'status' => 'success',
        ]);        
    }

}
