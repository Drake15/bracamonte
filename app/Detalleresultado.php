<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalleresultado extends Model
{
    //
    protected $table = 'detalleresultado';
    protected $fillable = [
        'idresultado',
        'idsubclasificacion' , 
        'resultado',
        'costo_detalle' ,
    ];
    public function resultado(){

        return $this->belongsTo('App\resultado');
    }
    public function subclasificacion(){

        return $this->belongsTo('App\subclasificacion');
    }
}
