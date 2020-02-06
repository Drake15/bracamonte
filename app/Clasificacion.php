<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clasificacion extends Model
{
    //
    protected $table = 'clasificaion';

    protected $fillable=[
        'nombre', 
        'condicion'
    ];

    public function subclasificacion ()
    {
        return $this-> hasMany('App\Subclasificacion');
    }
}

