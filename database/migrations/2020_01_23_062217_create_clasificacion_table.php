<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClasificacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clasificacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->boolean('condicion')->default(1);
            $table->timestamps();
        });
        DB::table('clasificacion')->insert(array('id'=>'1','nombre'=>'HEMATOLOGIA'));
        DB::table('clasificacion')->insert(array('id'=>'2','nombre'=>'SELOGIA'));
        DB::table('clasificacion')->insert(array('id'=>'3','nombre'=>'QUIMICA SANGUINEA'));
        DB::table('clasificacion')->insert(array('id'=>'4','nombre'=>'QUIMICA DE ORINA'));
        DB::table('clasificacion')->insert(array('id'=>'5','nombre'=>'EXAMENES ESPECIALES'));
        DB::table('clasificacion')->insert(array('id'=>'6','nombre'=>'PARASITOLOGIA'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clasificacion');
    }
}
