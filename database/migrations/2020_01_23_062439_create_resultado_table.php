<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultado', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idpaciente')->unsigned();
            $table->foreign('idpaciente')->references('id')->on('paciente');
            $table->integer('idmedico')->unsigned();
            $table->foreign('idmedico')->references('id')->on('medico');
            $table->integer('idasegurado')->unsigned();
            $table->foreign('idasegurado')->references('id')->on('asegurado');
            $table->integer('idhistorial')->unsigned();
            $table->foreign('idhistorial')->references('id')->on('historial');
            $table->integer('idsolicitud')->unsigned();
            $table->foreign('idsolicitud')->references('id')->on('solicitud');
            $table->date('fecha_emicion');
            $table->string('servicio');
            $table->string('muestra');
            $table->integer('costo_total');   
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
        Schema::dropIfExists('resultado');
    }
}
