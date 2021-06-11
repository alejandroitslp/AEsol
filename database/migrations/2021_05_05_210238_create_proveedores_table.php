<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();

            /* campos agragados segun especificaciones */

            $table->string('nombre_prov');
            $table->string('razon_social')->nullable();
            $table->string('dir_prov');
            $table->string('loc_prov');
            $table->string('edo_prov');
            $table->integer('cp_prov')->nullable();
            $table->string('telefono_prov')->nullable();
            $table->string('nombre_prov_suc')->nullable();
            $table->string('RFC')->nullable();

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
        Schema::dropIfExists('proveedores');
    }
}
