<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    protected $table = 'paciente';

    protected $fillable=['nombre','apellido_p','apellido_m','fecha_nacimiento','sexo'];
    
    public function historial(){
        return $this->hasOne(Historial::class,"idpaciente","id");
    }
    public function asegurado(){
        return $this->hasOne(Asegurado::class,"idpaciente","id");
    }
}
