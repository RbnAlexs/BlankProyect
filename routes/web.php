<?php

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

use App\Pastel;


Route::get('/', function () {
    return view('app');
});

Route::get('/usuarios/{nuevo}', function($nuevo=null){
  return "Hola nuevo usuario {$nuevo}";
})->where('nuevo','[/^nuevo$/]');

Route::get('/usuarios/{nombre?}', function($nombre='Nombre'){
    return "Bienvenido usuario, con nombre: {$nombre}";
})->where('nombre', '[A-Za-z]*');

Route::get('/usuarios/{id?}', function($id=null){
    return "Bienvenido usuario, ID: {$id}";
})->where('id', '[0-9]+');

Route::get('/contact', function(){
  return view('contact');
});

Route::get('/pruebapastel', function(){
  $pasteles = Pastel::sabor('cheesecake')->get();
  dd($pasteles);
});

Route::get('pasteleschocolate', function(){
       $pastel = Pastel::sabor('chocolate')->first();
       return view('pasteleschocolate')->with('pastel', $pastel->nombre);
   });

Route::resource('pasteles', 'PastelesController');

//Route::get('/usuarios/')
