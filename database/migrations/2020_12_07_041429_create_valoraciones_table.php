<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValoracionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valoraciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('puntaje')->nullable();
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
        Schema::dropIfExists('valoraciones');
    }
}
