<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function m1()
    {

        return view('partials.message');
    }
    public function m2()
    {

        return view('partials.message2');
    }
    
    public function m3()
    {

        return view('partials.message3');
    }

}
