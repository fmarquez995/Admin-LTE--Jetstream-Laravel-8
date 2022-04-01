<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function(){
return view('auth.login');
});

//Route::get('/', 'App\Http\Controllers\InicioController@index');
//Route::resource('/', 'App\Http\Controllers\PersonaController');
Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    return view('dash.index');
})->name('dash');

Route::get('/dash/crud', function(){
    return view('dash.crud.index');
    });

Route::get('/dash/crud/create', function(){
return view('dash.crud.create');
});

