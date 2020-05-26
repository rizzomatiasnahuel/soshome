<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

    

class ShoppingCart extends Model
{
    Protected $table = "shopping_carts";

    protected $fillable = ["status"];


    public function articlesSize(){
        return 10;


    }

    public static function findOrCreateBySessionID($shopping_cart_id){
        if($shopping_cart_id){

            return ShoppingCart::findBySession($shopping_cart_id);
        }else{

            return ShoppingCart::createWithoutSession($shopping_cart_id);
        }

    }
    public static function findBySession($shopping_cart_id){
        
        return ShoppingCart::find($shopping_cart_id);

    }    
    public static function createWithoutSession(){
        return ShoppingCart::Create (["status" => "incompleted" ]);

    }
    //
}
