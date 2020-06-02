<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    Protected $table="articles";

    Protected $fillable =['title','content','pricing','category_id','user_id'];

    Public function category(){

    	return $this->belongsTo('App\Category');

    }

   	Public function user(){

   		return $this->belongsTo('App\User');


   	}

   	Public function images(){

   		return $this->hasMany('App\Image');


   	}

   	Public function tags(){

   		return $this->belongsToMany('App\Tag');

   	} 

	   public function shoppingCart(){
        return $this->belongsToMany('App\ShoppingCart');


    }


}
