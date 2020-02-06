<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subclasificacion;
use Illuminate\Support\Facades\Redirect;
use DB;

class SubclasificacionController extends Controller
{
    //
    public function index(Request $request)
    {
        //
        if($request){

            $sql=trim($request->get('buscarTexto'));
            $subclasificaciones=DB::table('subclasificacion')
            ->join('clasificacion','subclasificacion.idclasificacion','=','clasificacion.id')
            ->select('subclasificacion.id',
            'subclasificacion.nombre',
            'subclasificacion.costo_referencial',
            'subclasificacion.unidad_medida',
            //'subclasificacion.condicion',
           // 'subclasificacion.idclasificacion',
            //'clasificacion.nombre as clasificaciones'
            )
            ->where('subclasificacion.nombre','LIKE','%'.$sql.'%')
            ->orderBy('subclasificacion.id','desc')
            ->paginate(3);

             /*listar los clasificaciones en ventana modal*/
            $clasificaciones=DB::table('clasificacion')
            ->select('id','nombre')
            ->where('condicion','=','1')->get(); 

            //return view('subclasificacion.index',["subclasificaciones"=>$subclasificaciones,"clasificaciones"=>$clasificaciones,"buscarTexto"=>$sql]);
        
            return $subclasificaciones;
        }      

       
    }
    public function store(Request $request)
    {
        //
        //if(!$request->ajax()) return redirect('/');
        $subclasificacion= new SubClasificacion();
        $subclasificacion->nombre = $request->nombre;
        $subclasificacion->costo_referencial = $request->costo_referencial;
        $subclasificacion->unidad_medida = $request->unidad_medida;
        $subclasificacion->condicion = '1';
        $subclasificacion->idclasificacion = $request->id_clasificacion;  
          
            $subclasificacion->save();
            return Redirect::to("subclasificacion"); 
    }
    public function update(Request $request)
    {
        //
        $subclasificacion= Subclasificacion::findOrFail($request->id_subclasificacion);
        $subclasificacion->nombre = $request->nombre;
        $subclasificacion->costo_referencial = $request->costo_referencial;
        $subclasificacion->unidad_medida = $request->unidad_medida;   
        $subclasificacion->condicion = '1';
        $subclasificacion->idclasificacion = $request->idclasificacion; 

        $subclasificacion->save();
          return Redirect::to("subclasificacion");
        
    }

    public function destroy(Request $request)
    {
        //
        $subclasificacion= Subclasificacion::findOrFail($request->id_subclasificacion);
         
         if($subclasificacion->condicion=="1"){

                $subclasificacion->condicion= '0';
                $subclasificacion->save();
                return Redirect::to("$subclasificacion");

           }else{

                $subclasificacion->condicion= '1';
                $subclasificacion->save();
                return Redirect::to("$subclasificacion");

            }
    }
}
