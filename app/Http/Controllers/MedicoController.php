<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medico;
use Illuminate\Support\Facades\Redirect;
use DB;

class MedicoController extends Controller
{
    //
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
            $medico=DB::table('medico')
            ->where('nombre','LIKE','%'.$sql.'%')
            ->orwhere('apellido_p','LIKE','%'.$sql.'%')
            ->orwhere('especialidad','LIKE','%'.$sql.'%')
            ->orderBy('id','desc')
            ->paginate(3);
            return view('medico.index',["medico"=>$medico,"buscarTexto"=>$sql]);
            //return $medico;
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
        $medico= new Medico();
        $medico->nombre = $request->nombre;
        $medico->apellido_p = $request->apellido_p;
        $medico->apellido_m = $request->apellido_m;
        $medico->especialidad = $request->especialidad;

        $medico->save();
        return Redirect::to("medico");
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
        $medico= Medico::findOrFail($request->id_medico);
        $medico->nombre = $request->nombre;
        $medico->apellido_p = $request->apellido_p;
        $medico->apellido_m = $request->apellido_m;
        $medico->especialidad = $request->especialidad;
        
        $medico->save();
        return Redirect::to("medico");
    }
}
