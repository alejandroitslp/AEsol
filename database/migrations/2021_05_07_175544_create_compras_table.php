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

            $table->string('foliocompra')->index()->unique();
            $table->date('fecha_emision');
            $table->string('desc_orden');//nuevo
            $table->foreignId('prov_prod')->onDelete('SET NULL')->constrained('proveedores');
            $table->decimal('precio_total', 8, 2);
            $table->foreignId('id_resp')->constrained('responsables_compras');
            $table->string('embarc');
            $table->string('t_moneda');
            $table->string('met_pago');
            $table->decimal('impuesto',8,2);
            $table->decimal('p_total_c_imp',8,2);
            $table->string('cot_ref');
            $table->date('fecha_ref');
            $table->string('cuenta_cargo');
            $table->date('fecha_req');
            $table->string('requisita');
            $table->text('comentarios')->nullable();
            $table->foreignId('id_envios')->constrained('envios');
            $table->boolean('autorizado')->default(false);//nuevo

            

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
