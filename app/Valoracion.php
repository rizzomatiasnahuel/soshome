<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valoracion extends Model
{
    Protected $table="valoraciones";

    Protected $fillable =['puntaje','order_id','user_id'];
    
    
    
    Public function user(){

        return $this->belongsTo('App\User');


    }
    Public function order(){

        return $this->belongsTo('App\Order');


    }
    
}

