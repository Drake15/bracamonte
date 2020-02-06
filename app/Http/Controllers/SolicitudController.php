<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Paciente;
use App\Medico;
use App\Asegurado;
use App\Historial;
use App\Solicitud;
use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    //
    public function index(Request $request)
    {
        //

        if($request){

            $sql=trim($request->get('buscarTexto'));
            $solicitud=Solicitud::with("paciente","medico","historial","asegurado")->where('nombre','LIKE','%'.$sql.'%')
            ->orWhere('apellido_p','LIKE','%'.$sql.'%')
            ->orWhere('apellido_m','LIKE','%'.$sql.'%')
            ->orderBy('id','desc')
            ->paginate(3);
            return view('solicitud.index',["solicitud"=>$solicitud,"buscarTexto"=>$sql]);
            //return $solicitud;
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
        $solicitud= new Solicitud();
        $solicitud->fecha_solicitud = $request->fecha_solicitud;
        $solicitud->tipo = $request->tipo;
        $solicitud->servicio = $request->servicio;
        $solicitud->diagnostico = $request->diagnostico;
        $solicitud->save();

        $paciente= new Paciente();
        $paciente->n_historial=$request->n_historial;
        $paciente->idpaciente=$solicitud->id;
        $paciente->save();

        $historial= new Historial();
        $historial->n_historial=$request->n_historial;
        $historial->idpaciente=$solicitud->id;
        $historial->save();

        $historial= new Historial();
        $historial->n_historial=$request->n_historial;
        $historial->idpaciente=$solicitud->id;
        $historial->save();

        $asegurado= new Asegurado();
        $asegurado->n_asegurado=$request->n_asegurado;
        $asegurado->idpaciente=$solicitud->id;
        $asegurado->save();
        
        


        return Redirect::to("solicitud");
    }

    
}
