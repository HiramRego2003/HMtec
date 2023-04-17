<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validar;
use App\Models\Usuarios;
use App\Models\TUsuarios;
use Barryvdh\DomPDF\Facade\Pdf;


class UsuarioController extends Controller {


    public function conoce(){
        return view('conocenos');
    }

    public function usuarios(){
        $usuarios = Usuarios::all();
        return view('usuario.lista_usuarios', compact('usuarios'));
    }


    /* public function usuarios(){
        $usuarios_a = Usuarios::all();
        $usuarios_b = \DB::select('SELECT u.id_usuario as id_usuario, u.nombre as nombre, u.app as app,u.ap as ap, u.foto as foto, u.email as email,
        u.pass as  pass, t.nombre as nombre FROM tb_usuarios as u, tb_tipos as t');

            return view("usuario.lista_usuarios")
            ->with(['usuarios1' => $usuarios_a])
            ->with(['usuarios2' => $usuarios_b]);
    } */

    public function alta_usuarios(){
        $tipo = TUsuarios::all();
        return view("registrar.registrar_usuarios")
        ->with(['nombre' => $tipo]);
    }

    public function registrar_usuarios(validar $request){
        Usuarios::create(array(
            'nombre' => $request->input('nombre'),
            'app' => $request->input('app'),
            'ap' => $request->input('ap'),
            'fn' => $request->input('fn'),
            'gen' => $request->input('gen'),
            'foto' => $request->input('foto'),
            'email' => $request->input('email'),
            'pass' => $request->input('pass'),
            'id_tipo' =>'2'
        ));
        return redirect()->route('login');
    }

    public function alta_administrador(){
        $tipo = TUsuarios::all();
        return view("registrar.registrar_admin")
        ->with(['nombre' => $tipo]);
    }

    public function registrar_administrador(validar $request){
       Usuarios::create(array(
                'nombre' =>$request->input('nombre'),
                'app' =>$request->input('app'),
                'ap' =>$request->input('ap'),
                'fn' =>$request->input('fn'),
                'gen' => $request->input('gen'),
                'foto' => $request->input('foto'),
                'email' => $request->input('email'),
                'pass' => $request->input('pass'),
                'id_tipo' =>'1'

       ));
        return redirect()->route('lista_usuarios');
    }

    public function salvar_usuarios(Usuarios $id, Request $request){
        $query = Usuarios::find($id->id_usuario);
        $query->nombre = trim($request->nombre);
        $query->app = trim($request->app);
        $query->ap = trim($request->ap);
        $query->fn =  $request->fn;
        $query->gen =   $request->gen;
        $query->foto = trim($request->foto);
        $query->email = trim($request->email);
        $query->pass = trim($request->pass);
        $query->save();
        return redirect()->route("lista_usuarios", ['id' => $id->id_usuario]);
   }

   public function detalle_usuarios($id){
    $usuarios = Usuarios::find($id);
    return view("usuario.detalle_usuarios")
    ->with(['detalle_usuarios' => $usuarios]);
    }

   public function editar_usuarios(Usuarios $id){
    $tipo = Usuarios::all();
            return view("usuario.editar_usuarios")
        ->with(['usuarios' => $id])
        ->with(['tipo' => $tipo]);
    }

    public function editar_clientes(Usuarios $id){
        $tipo = Usuarios::all();
                return view("lista_clientes")
            ->with(['clientes' => $id])
            ->with(['tipo' => $tipo]);
        }

    public function borrar_usuarios(Usuarios $id){
        \Storage::disk('local')->delete($id->foto);
       $id->delete();
       return redirect()->route('lista_usuarios');
    }

    public function buscarUsuarios(Request $request) {
        $search = $request->input('search');

        $usuarios = DB::table('usuario')
            ->where('nombre', 'LIKE', '%'.$search.'%')
            ->orWhere('app', 'LIKE', '%'.$search.'%')
            ->orWhere('email', 'LIKE', '%'.$search.'%')
            ->orWhere('id_tipo', 'LIKE', '%'.$search.'%')
            ->orderBy('id_usuario')
            ->get();

        return view('lista_usuarios', ['usuarios' => $usuarios]);
    }

    public function pdf(){
        $usuarios_a =Usuarios::all();
        $pdf = PDF::loadView('usuario.pdf', ['usuarios1'=>$usuarios_a]);
        return $pdf->stream();
    }


}
