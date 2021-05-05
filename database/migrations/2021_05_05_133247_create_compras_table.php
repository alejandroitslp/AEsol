<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();

            /* campos agragados segun especificaciones */

            $table->string('foliocompra');
            $table->string('codigo_producto');
            $table->string('nombre_producto');
            $table->integer('cantidad_producto');
            $table->date('fecha_emision');
            $table->integer('prov_prod')->unsigned();
            $table->foreign('prov_prod')->references('id')->on('proveedores')->onDelete('cascade');
            $table->integer('precio_u');
            $table->integer('precio_total');
            $table->integer('id_resp')->unsigned();
            $table->foreign('id_resp')->references('id')->on('responsables_compras')->onDelete('cascade');
            $table->string('embarc');
            $table->string('t_moneda');
            $table->string('met_pago');
            $table->integer('p_total_c_imp');
            $table->integer('cot_ref');
            $table->date('fecha_ref');
            $table->integer('cuenta_cargo');
            $table->date('fecha_req');
            

            //////////////////////////////////////////////
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
        Schema::dropIfExists('compras');
    }
}
