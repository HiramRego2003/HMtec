<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\SensoresController;
use App\Http\Controllers\ExcelController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Login
Route::name('login')->get('login', [LoginController::class, 'login']);
Route::name('valida')->get('valida', [LoginController::class, 'valida']);
Route::name('logout')->get('logout', [LoginController::class], 'logout');
Route::name('admin')->get('admin', [LoginController::class, 'admin']);
Route::name('index_usuario')->get('index_usuario', [LoginController::class, 'index_usuario']);
Route::name('index')->get('index', [LoginController::class, 'index']);
Route::name('conoce')->get('conoce', [UsuarioController::class, 'conoce']);

//Vistas
Route::get('/', function(){ return view('index');});

//Usuarios
Route::name('alta_usuarios')->get('alta_usuarios', [UsuarioController::class, 'alta_usuarios']);
Route::name('alta_administrador')->get('alta_administrador', [UsuarioController::class, 'alta_administrador']);
Route::name('detalle_usuarios')->get('detalle_usuarios/{id}', [UsuarioController::class, 'detalle_usuarios']);
Route::name('registrar_usuarios')->post('registrar_usuarios', [UsuarioController::class, 'registrar_usuarios']);
Route::name('registrar_administrador')->post('registrar_administrador', [UsuarioController::class, 'registrar_administrador']);
Route::name('borrar_usuarios')->get('borrar_usuarios/{id}', [UsuarioController::class, 'borrar_usuarios' ]);
Route::name('salvar_usuarios')->put('salvar_usuarios/{id}', [UsuarioController::class, 'salvar_usuarios']);
Route::name('editar_usuarios')->get('editar_usuarios/{id}', [UsuarioController::class, 'editar_usuarios']);
Route::get('/lista_usuarios/buscar', 'UsuarioController@buscarUsuarios')->name('buscarUsuarios');
Route::name('pdf')->get('pdf', [UsuarioController::class, 'pdf']);
Route::name('UsuariosExport')->get('/export/users', [ExcelController::class, 'UsuariosExport']);
Route::name('lista_usuarios')->get('lista_usuarios', [UsuarioController::class, 'usuarios' ]);

 // Sensores
 Route::name('alta_sensor')->get('alta_sensor', [SensoresController::class, 'alta_sensor']);
 Route::name('registrar_sensor')->post('registrar_sensor', [SensoresController::class, 'registrar_sensor']);
 Route::name('salvar_sensor')->put('salvar_sensor/{id}', [SensoresController::class, 'salvar_sensor']);
 Route::name('editar_sensores')->get('editar_sensores/{id}', [SensoresController::class, 'editar_sensores']);
 Route::name('borrar_sensor')->get('borrar_sensor/{id}', [SensoresController::class, 'borrar_sensor' ]);
 Route::name('grafica')->get('grafica', [SensoresController::class, 'grafica']);
 Route::get('/lista_sensores/buscar', 'SensorController@buscarSensor')->name('buscarSensor');
 Route::name('pdf_sensores')->get('pdf_sensores', [SensoresController::class, 'pdf_sensores']);
Route::name('SensorExport')->get('/export/sensor', [ExcelController::class, 'SensorExport']);
Route::name('lista_sensores')->get('lista_sensores', [SensoresController::class, 'sensores' ]);











