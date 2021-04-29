<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVencimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vencimientos', function (Blueprint $table) {
            $table->bigIncrements('id_vencimiento');
            $table->integer('id_obligacion');
            $table->integer('id_usuario');
            $table->integer('id_cliente');
            $table->integer('brand');
            $table->string('descripcion')->nullable();
            $table->date('fecha_alta');
            $table->date('fecha_baja')->nullable();
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
        Schema::dropIfExists('vencimientos');
    }
}
