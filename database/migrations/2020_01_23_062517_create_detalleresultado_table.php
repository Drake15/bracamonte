<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleresultadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleresultado', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idresultado')->unsigned();
            $table->foreign('idresultado')->references('id')->on('resultado');
            $table->integer('idsubclasificacion')->unsigned();
            $table->foreign('idsubclasificacion')->references('id')->on('subclasificacion');
            $table->string('resultado');
            $table->integer('costo_detalle');
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
        Schema::dropIfExists('detalleresultado');
    }
}
