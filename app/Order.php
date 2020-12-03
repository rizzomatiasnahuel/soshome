<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{


    Protected $table="orders";

    Protected $fillable =['subtotal','shipping','user_id'];
}
