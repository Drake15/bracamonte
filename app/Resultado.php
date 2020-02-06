<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    //
    protected $table = 'resultado';
    protected $fillable = [
        'idpaciente',
        'idmedico' , 
        'idasegurado',
        'idhistorial' ,
        'idsolicitud',
        'fecha_emicion' ,
        'servicio' ,   
        'fecha_emicion' ,
        'muestra' ,    
        'costo_total' , 
    ];
    public function paciente(){

        return $this->belongsTo('App\paciente');
    }
    public function medico(){

        return $this->belongsTo('App\medico');
    }
    public function asegurado(){

        return $this->belongsTo('App\asegurado');
    }
    public function historial(){

        return $this->belongsTo('App\historial');
    }
    public function solicitud(){

    return $this->belongsTo('App\solicitud');
    }
}
