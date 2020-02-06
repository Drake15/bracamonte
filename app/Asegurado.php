<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asegurado extends Model
{
    //
    protected $table = 'asegurado';
        
    protected $fillable = [
        'n_asegurado',
        'idpaciente'
    ];

    public $timestamps =false;
}
