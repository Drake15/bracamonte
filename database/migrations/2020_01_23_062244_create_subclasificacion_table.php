<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubclasificacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subclasificacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('costo_referencial');
            $table->string('unidad_medida');
            $table->boolean('condicion')->default(1);
            $table->integer('idclasificacion')->unsigned();
            $table->foreign('idclasificacion')->references('id')->on('clasificacion');
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
        Schema::dropIfExists('subclasificacion');
    }
}
