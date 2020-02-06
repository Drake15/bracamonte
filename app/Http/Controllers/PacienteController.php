<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use App\Historial;
use App\Asegurado;
use Illuminate\Support\Facades\Redirect;
use DB;

class PacienteController extends Controller
{
    //
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        if($request){

            $sql=trim($request->get('buscarTexto'));
            $paciente=Paciente::with("historial","asegurado")->where('nombre','LIKE','%'.$sql.'%')
            ->orWhere('apellido_p','LIKE','%'.$sql.'%')
            ->orWhere('apellido_m','LIKE','%'.$sql.'%')
            ->orderBy('id','desc')
            ->paginate(3);
            return view('paciente.index',["paciente"=>$paciente,"buscarTexto"=>$sql]);
            //return $paciente;
        }
       
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $paciente= new Paciente();
        $paciente->nombre = $request->nombre;
        $paciente->apellido_p = $request->apellido_p;
        $paciente->apellido_m = $request->apellido_m;
        $paciente->fecha_nacimiento = $request->fecha_nacimiento;
        $paciente->sexo = $request->sexo;
        $paciente->save();

        $historial= new Historial();
        $historial->n_historial=$request->n_historial;
        $historial->idpaciente=$paciente->id;
        $historial->save();
        
        $asegurado= new Asegurado();
        $asegurado->n_asegurado=$request->n_asegurado;
        $asegurado->idpaciente=$paciente->id;
        $asegurado->save();
        
        


        return Redirect::to("paciente");
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $paciente= Paciente::with("historial")->findOrFail($request->id_paciente);
        $paciente->nombre = $request->nombre;
        $paciente->apellido_p = $request->apellido_p;
        $paciente->apellido_m = $request->apellido_m;
        $paciente->fecha_nacimiento = $request->fecha_nacimiento;
        $paciente->sexo = $request->sexo;


        $paciente->historial->n_historial=$request->n_historial;
        $paciente->historial->save();


        $paciente->save();
        return Redirect::to("paciente");
    }
    public function un_paciente(Request $request){
        $id=$request->id;
        $paciente=Paciente::with("historial")->findOrFail($id);
        return response()->json($paciente);
    }

}
