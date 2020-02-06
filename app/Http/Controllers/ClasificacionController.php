<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clasificacion;
use DB;

class ClasificacionController extends Controller
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
            $clasificacion=DB::table('clasificacion')->where('nombre','LIKE','%'.$sql.'%')
            ->orderBy('id','desc')
            ->paginate(3);
            return view('clasificacion.index',["clasificacion"=>$clasificacion,"buscarTexto"=>$sql]);
            //return $clasificacion;
        }
       
    }
}
