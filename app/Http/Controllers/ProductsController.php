<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Product;

use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id','ASC')->paginate(10);
        return view("products.index",["products"=>$products]);
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = new Product;
        return view("products.create",["products"=>$products]);
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
        $products = new Product;

        $products->title = $request->title;
        $products->descríption = $request->descríption;
        $products->pricing = $request->pricing;
        
        $products->user_id = Auth::user()->id;
    
        if($products->save()){
             return redirect("/products");
        } else {
            return view("products.create");

        }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::find($id);
        return view("products.show",["products" => $products]);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $products = Product:: find ($id);
        return view("products.edit",["products" => $products]);
        

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
        $products = Product::find($id);

        $products->title = $request->title;
        $products->descríption = $request->descríption;
        $products->pricing = $request->pricing;
        
        if($products->save()){
             return redirect("/products");
        } else {
            return view("products.edit");

        }
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
          Product::destroy($id);
          return redirect('/products');
    }
}
