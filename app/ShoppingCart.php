<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

    

class ShoppingCart extends Model
{
    Protected $table = "shopping_carts";


    
   /*  Protected $fillable =['article_id','article_name','pricing','quantity','user_email','session_id'];
     */

    public function inShoppingCarts(){
        return $this->hasMany('App\Inshoppingcart');


    }

    public function articles(){
        return $this->belongsToMany('App\Article');


    }



    public function articlesSize(){
        return 10;


    }
/* 
    <!-- <a href="" class="nav-link" >
    Mi Carrito
    <span class="circle-Shopping-cart">
        {{$shopping_cart ->articlesSize()}}
    </span>
    </a> --> */


    /* public static function findOrCreateBySessionID($shopping_cart_id){
        if($shopping_cart_id){

            return ShoppingCart::findBySession($shopping_cart_id);
        }else{

            return ShoppingCart::createWithoutSession($shopping_cart_id);
        }

    }
/* //    public static function findBySession($shopping_cart_id){
        
        return ShoppingCart::find($shopping_cart_id);

    }     */
    public static function createWithoutSession(){
        return ShoppingCart::Create (["status" => "incompleted" ]);

    }
    // */
}
