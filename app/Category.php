<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    Protected $table = "categories";

    Protected $fillable =['name'];

    Public function articles(){

    	return $this->hasMany('App\Article');

    } 

    Public function scopesearchFrontcategory($query, $name){

    			return $query->where('name','=',$name);


    }


}