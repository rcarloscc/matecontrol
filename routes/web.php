<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ComprarPaquetes;

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



Route::get('/app/{any}', [ApplicationController::class, 'index'])->where('any', '.*');


Route::get('/', function () {
    return view('index');
});
Route::get("nosotros", function () {
    return view('nosotros');
});
Route::get("contacto", function () {
    return view('contacto');
});


Route::get("paquetes/{paquete}", [ComprarPaquetes::class , "index"] );
Route::post("/registrar-cuenta", [ComprarPaquetes::class , "create"] ) ;
Route::post("/pay-status" , [ComprarPaquetes::class, "checkstatus"]);

