<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(Request $request)
    {
        if( $request->user()->type== 'admin'){
            return view('/home');
        }if( $request->user()->type== 'menber'){
            return view('/homeu');
        }
        
    }
    public function homeu()
    {
        
            return view('/homeu');
       
    }
}
