<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarNombreUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('users', function (Blueprint $table) {
            $table->string('apellido')->nullable();
            $table->integer('DNI')->nullable();
            $table->integer('celular')->nullable();
            $table->string('barrio')->nullable();
            $table->string('GPS')->nullable();
            $table->string('certificacion')->nullable();
            $table->string('matricula')->nullable();
            $table->string('horario_atencion')->nullable();
            $table->string('pregunta')->nullable();
            $table->string('respuesta')->nullable();    
                                            });

  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
