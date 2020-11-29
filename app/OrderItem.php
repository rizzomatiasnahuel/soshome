<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    Protected $table="order_items";

    Protected $fillable =['pricing','quantity','pricing','product_id','order_id'];

    public $timestamps = false;
}
