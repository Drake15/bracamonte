<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idpaciente')->unsigned();
            $table->foreign('idpaciente')->references('id')->on('paciente');
            $table->integer('idmedico')->unsigned();
            $table->foreign('idmedico')->references('id')->on('medico');
            $table->integer('idasegurado')->unsigned();
            $table->foreign('idasegurado')->references('id')->on('asegurado');
            $table->integer('idhistorial')->unsigned();
            $table->foreign('idhistorial')->references('id')->on('historial');
            $table->date('fecha_solicitud');
            $table->enum('tipo',['Hospitalizado','Externo']);
            $table->string('servicio');
            $table->string('diagnostico');
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
        Schema::dropIfExists('solicitud');
    }
}
