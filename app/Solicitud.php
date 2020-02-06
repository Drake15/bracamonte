<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = 'solicitud';
        
        protected $fillable = [
            'idpaciente',
            'idmedico' ,
            'idhitorial' ,
            'idasegurado' , 
            'fecha_solicitud',
            'tipo',
            'servicio',
            'diagnostico'
        ];
        public function paciente(){

            return $this->belongsTo('App\paciente');
        }
        public function medico(){

            return $this->belongsTo('App\medico');
        }
        public function historial(){

            return $this->belongsTo('App\historial');
        }
        public function asegurado(){

            return $this->belongsTo('App\asegurado');
        }

}
