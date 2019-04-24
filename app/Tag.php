<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
	Protected $table = "tags";

	Protected $fillable =['name'];

	Public function articles(){

		return $this->belongsToMany('App\article');


	}
	
}
