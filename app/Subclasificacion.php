<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subclasificacion extends Model
{
    //
    protected $table = 'subclasificacion';

    protected $fillable=[
        'nombre',
        'costo_referencial',
        'unidad_medida',
        'condicion',
        'idclasificacion'
    ];
    public function clasificacion(){

        return $this->belongsTo('App\clasificacion');
    }
}
