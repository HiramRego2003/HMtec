<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsuariosExport;
use App\Exports\SensorExport;



class ExcelController extends Controller
{
    public function UsuariosExport(){

        return Excel::download(new UsuariosExport, 'usuarios.xlsx');

    }

    public function SensorExport(){

        return Excel::download(new SensorExport, 'sensores.xlsx');

    }
}
