<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;


class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function edit($id)
    {
        $user = User::find($id);
        return view('perfil.perfil') ->with('user',$user);
    }
    public function verperfil()
    {
        $user = Auth::user();
        return view('perfil.miperfil')->with('user',$user);;
    }

   
}
