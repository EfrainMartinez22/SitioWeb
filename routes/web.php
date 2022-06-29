<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);

// index
Route::get('/', function () {
    return view('index');
})->name('index');

//somos
Route::get('/somos', function () {
    return view('somos');
})->name('somos');

//paquetes
Route::get('/paquete1', function () {
    return view('paquete1');
})->name('paquete1');
Route::get('/paquete2', function () {
    return view('paquete2');
})->name('paquete2');
Route::get('/paquete3', function () {
    return view('paquete3');
})->name('paquete3');

//procedimientos
Route::get('/biche', function () {
    return view('procedimientos/bichectomia');
})->name('bichectomia');
Route::get('/blefaro', function () {
    return view('procedimientos/blefaro');
})->name('blefaroplastia');
Route::get('/lifting', function () {
    return view('procedimientos/lifting');
})->name('lifting-de-labios');
Route::get('/lipo', function () {
    return view('procedimientos/Lipo');
})->name('Lipo-cervical');
Route::get('/marcaje', function () {
    return view('procedimientos/marcaje');
})->name('marcaje-de-cara');
Route::get('/otop', function () {
    return view('procedimientos/otoplastia');
})->name('otoplastia');
Route::get('/rino', function () {
    return view('procedimientos/rino');
})->name('rinoplastia');


//instalaciones
Route::get('/consejoo', function () {
    return view('consejoo');
})->name('Consejos');

//galeria
Route::get('/galeria', function () {
    return view('galeria');
})->name('galeria');


//agendar cita
Route::get('/agendar_cita', function () {
    return view('agendar_cita');
})->name('agendar_cita');

//contactanos
Route::get('/contactanos', function () {
    return view('/contactanos');
})->name('/contactanos');

//mapa del sitio
Route::get('/mapa_sitio', function () {
    return view('mapa_sitio');
})->name('mapa_sitio');

//Registro
Route::get('/registro', function () {
    return view('registro');
})->name('registro');

//logs
Route::get('/admin', [AdminController::class,'index'])
->middleware('auth.admin')
->name('admin.index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
