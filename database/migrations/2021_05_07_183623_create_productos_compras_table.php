<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_compras', function (Blueprint $table) {
            $table->id();
            $table->string('folio');
            $table->foreign('folio')->references('foliocompra')->on('compras')->onUpdate('cascade');
            $table->string('codigo');
            $table->string('nombre');
            $table->integer('cantidad');
            $table->decimal('precio',8,3);
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
        Schema::dropIfExists('productos_compras');
    }
}
