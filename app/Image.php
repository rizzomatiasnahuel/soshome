<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    Protected $table = "images";

    Protected $fillable =['name','article_id'];


    Public function article{

    	return $this->belongsTo('App/article');

    }

}
