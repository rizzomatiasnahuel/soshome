<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InShoppingCart extends Model
{
    Public function shoppingCart(){

    	return $this->belongsTo('App\ShoppingCart');

    }
}
