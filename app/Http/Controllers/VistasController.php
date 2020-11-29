<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function v1()
    {

        return view('layouts.quienessomos');
    }
    public function v2()
    {

        return view('layouts.planesdeservicio');
    }
    
    public function v3()
    {

        return view('layouts.contacto');
    }

    
}
