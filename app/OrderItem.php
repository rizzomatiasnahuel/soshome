<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    Protected $table="orderItems";

    Protected $fillable =['price','quantity','pricing','product_id','order_id'];

    public $timestamps = false;
}
