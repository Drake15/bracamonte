<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Redirect;
use DB;


class UserController extends Controller
{
    //
    public function index(Request $request)
    {
        //
        if($request){

            $sql=trim($request->get('buscarTexto'));
            $usuarios=DB::table('users')
            ->join('rol','users.idrol','=','rol.id')
            ->select('users.id',
            'users.nombre',
            'users.apellido',
            'users.direccion',
            'users.telefono',
            'users.usuario',
            'users.password',
            'users.condicion',
            'users.idrol',
            'rol.nombre as roles')
            ->where('users.nombre','LIKE','%'.$sql.'%')
            ->orwhere('users.apellido','LIKE','%'.$sql.'%')
            ->orderBy('users.id','desc')
            ->paginate(3);

             /*listar los roles en ventana modal*/
            $roles=DB::table('rol')
            ->select('id','nombre','descripcion')
            ->where('condicion','=','1')->get(); 

            return view('user.index',["usuarios"=>$usuarios,"rol"=>$roles,"buscarTexto"=>$sql]);
        
            //return $usuarios;
        }      

       
    }

    public function store(Request $request)
    {
        //
        //if(!$request->ajax()) return redirect('/');
        $user= new User();
        $user->nombre = $request->nombre;
        $user->apellido = $request->apellido;
        $user->direccion = $request->direccion;
        $user->telefono = $request->telefono;
        $user->usuario = $request->usuario;
        $user->password = bcrypt( $request->password);
        $user->condicion = '1';
        $user->idrol = $request->id_rol;  
          
            $user->save();
            return Redirect::to("user"); 
    }

    public function update(Request $request)
    {
        //
        
        $validar=User::where("usuario",$request->usuario)->get();
        if(count($validar)==0){
            $user= User::findOrFail($request->id_usuario);
            $user->nombre = $request->nombre;
            $user->apellido = $request->apellido;
            $user->telefono = $request->telefono;
            $user->direccion = $request->direccion;
            $user->usuario = $request->usuario;
            $user->password = bcrypt($request->password);
            $user->condicion = '1';
            $user->idrol = $request->id_rol;   
            $notify=[
                "type"=>"success",
                "menssage"=>"El usuario se actulizo correctamente"
            ];
            
            $user->save();
        }else{
            $notify=[
                "type"=>"error",
                "menssage"=>"El nombre de usuario esta en uso"
            ];
        }
        
          return redirect()->back()->with("notify",$notify);
    }


    public function destroy(Request $request)
    {
        //
        $user= User::findOrFail($request->id_usuario);
         
         if($user->condicion=="1"){

                $user->condicion= '0';
                $user->save();
                return Redirect::to("user");

           }else{

                $user->condicion= '1';
                $user->save();
                return Redirect::to("user");

            }
    }
}
