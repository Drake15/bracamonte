<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    //
    protected $table = 'medico';

    protected $fillable=['nombre','apellido_p','apellido_m','especialidad'];
}
