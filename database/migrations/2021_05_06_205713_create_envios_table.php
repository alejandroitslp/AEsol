<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnviosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envios', function (Blueprint $table) {
            $table->id();
             /* campos agragados segun especificaciones */

             $table->string('nombre');
             $table->string('nombre_enc');
             $table->string('dir_envio');
             $table->string('loc_envio');
             $table->integer('cp_envio');
             $table->string('edo_envio');
             $table->string('telefono_envio');
 
             /////////////////////////////////////////////
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
        Schema::dropIfExists('envios');
    }
}
