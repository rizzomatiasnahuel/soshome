<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddValoracionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('valoraciones', function (Blueprint $table) {
           
            $table->integer('user_id')->unsigned();
            $table->integer('order_id')->unsigned();


            $table->foreign('user_id')->references('id')->on('users')->ondelete('cascade'); 
            $table->foreign('order_id')->references('id')->on('orders')->ondelete('cascade');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('valoraciones', function (Blueprint $table) {
           
            $table->dropColumn('user_id')->unsigned();
            $table->dropColumn('order_id')->unsigned();


            $table->foreign('user_id')->references('id')->on('users')->ondelete('cascade'); 
            $table->foreign('order_id')->references('id')->on('orders')->ondelete('cascade');


        });
    }
}
