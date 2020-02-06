<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detallesolicitud extends Model
{
    //
    protected $table = 'detallesolicitud';
    protected $fillable = [
        'idpsolicitud',
        'idsubclasificador' ,        
    ];
    public function solicitud(){

        return $this->belongsTo('App\solicitud');
    }
    public function subclasificacion(){

        return $this->belongsTo('App\subclasificacion');
    }
}
