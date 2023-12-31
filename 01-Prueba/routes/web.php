<?php

use Illuminate\Support\Facades\Route;
use App\Models\DatoCliente;

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

Route::get('/', function () {
	$datos['listado'] = DatoCliente::all();
    return view('index', $datos);
});

Route::resource('url', \App\Http\Controllers\DatoClienteController::class);
