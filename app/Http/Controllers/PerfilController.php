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
    public function update(Request $request, $id)
    {
        
        $user = User::find($id);
        $user -> name = $request->name;
        $user -> email =$request->email;
        $user -> type = $request ->type;


        $user -> apellido = $request->apellido;
        $user -> DNI =$request->DNI;
        $user -> celular = $request ->celular;

        $user -> barrio = $request->barrio;
        $user -> GPS =$request->GPS;
        $user -> certificacion = $request ->certificacion;

        $user -> matricula = $request->matricula;
        $user -> horario_atencion =$request->horario_atencion;
        
        $user -> save();
        
        return redirect("/verperfil");
    }
   
}
