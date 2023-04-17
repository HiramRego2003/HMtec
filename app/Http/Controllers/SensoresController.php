<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validar;
use App\Models\Sensor;
use App\Models\TSensores;
use App\Models\Especificaciones;
use Barryvdh\DomPDF\Facade\Pdf;


class SensoresController extends Controller{

   /*  public function sensores(){
        $sensor_a = Sensor::all();
        $sensor_b = \DB::select('SELECT s.id_sensor as id_sensor,
        s.nombre as nombre, s.status as status FROM tb_sensor as s ');

            return view("sensor.lista_sensores")
            ->with(['sensor1' => $sensor_a])
            ->with(['sensor2' => $sensor_b]);
    } */

    public function sensores(){
    $sensores = Sensor::all();
    return view('sensor.lista_sensores', compact('sensores'));
    }


    /* public function reportes(){
        $reportes_a = Especificaciones::all();

    } */

    public function alta_sensor(){
        $tipo = TSensores::all();
        return view("sensor.lista_sensores")
        ->with(['nombre' => $tipo]);
    }

    public function registrar_sensor(validar $request){
        Sensor::create(array(
                'nombre' =>$request->input('nombre'),
                'status' =>$request->input('status'),
        ));
        return redirect()->route('lista_sensores');
    }

    public function salvar_sensor(Sensor $id, Request $request){
        $query = Sensor::find($id->id_sensor);
        $query->nombre = trim($request->nombre);
        $query->status = trim($request->status);
        $query->save();
        return redirect()->route("lista_sensores",['id' => $id->id_sensor]);
    }

    public function editar_sensores(Sensor $id){
        $tipo = Sensor::all();
                return view("sensor.editar_sensore")
            ->with(['sensor' => $id])
            ->with(['tipo' => $tipo]);
        }

    /* public function borrar_sensor(Sensor $id){
        $sensor = Sensor::findOrFail($id);
        $sensor->delete();
        return redirect()->route('lista_sensores')->with('success', 'Usuario eliminado correctamente.');
    } */

    public function borrar_sensor(Sensor $id){
        try {
            $sensor = Sensor::findOrFail($id);
            $sensor->delete();
            return redirect()->route('lista_sensores')->with('success', 'Sensor eliminado correctamente.');
        } catch (\Exception $e) {
            return redirect()->route('lista_sensores')->with('error', 'Error al eliminar el sensor: ' . $e->getMessage());
        }
    }


    public function pdf_sensores(){
        $sensor_a =Sensor::all();
        $pdf = PDF::loadView('sensor.pdf_sensores', ['sensor1'=>$sensor_a]);
        return $pdf->stream();
    }

    public function grafica(){
        $datos =Especificaciones::all();
        return view("grafica")
        ->with(['datos'=> $datos]);
    }

    public function buscarSensores(Request $request){
    $search = $request->input('search');

        $sensores = DB::table('sensores')
                ->where('nombre', 'LIKE', '%'.$search.'%')
                ->orWhere('status', 'LIKE', '%'.$search.'%')
                ->orderBy('id_sensor')
                ->get();

    return view('lista_sensores', ['sensores' => $sensores]);
    }



}
