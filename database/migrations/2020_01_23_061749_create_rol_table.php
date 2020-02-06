<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nombre',30)->unique();
            $table->string('descripcion',100)->nullable();
            $table->boolean('condicion')->default(1);
            $table->timestamps();
        });
        DB::table('rol')->insert(array('id'=>'1','nombre'=>'Administrador','descripcion'=>'Administrador'));
        DB::table('rol')->insert(array('id'=>'2','nombre'=>'Operador','descripcion'=>'Operador'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rol');
    }
}
