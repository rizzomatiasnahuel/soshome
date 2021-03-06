<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','apellido','DNI','celular','barrio','GPS','certificacion','matricula','horario_atencion',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    Public function articles(){

        return $this->hasMany('App\Article');


    }
    Public function valoracion(){

        return $this->hasMany('App\Valoracion');


    }

}
