<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObligacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obligaciones', function (Blueprint $table) {
            $table->bigIncrements('id_obligacion');
            $table->integer('id_impuesto');
            $table->integer('cuit_fin');
            $table->date('fecha_vencimiento');
            $table->string('comentarios')->nullable();
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
        Schema::dropIfExists('obligaciones');
    }
}
