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
Route::view('/','welcome');

Route::view('/','welcome')->name('welcome');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mostrar', function () {
    $titulo = 'Fecha';
    return view('mostrar-fecha')
        ->with('titulo', $titulo);
});
//Route::get('/libros/{titulo?}/{ano?}', function ($titulo = "No has seleccionado ningún libro", $ano = "No has introducido el año") {
//    return view('libros.libros', array(
//        'titulo'=>$titulo,
//        'ano'=>$ano
//    ));
//})->where('ano', '[0-9]+');
Route::get('/listado-libros', function () {
    $titulo = "Listado de Libros";
    $libros = ['La sombra del Viento', 'La mujer helada', 'Patria'];
    return view('libros.listado-libros')
        ->with('titulo', $titulo)
        ->with('libros', $libros);
});
Route::get('/libros/{titulo?}', 'LibrosController@index')
            ->name('libros.index');

Route::get('/detalles/{password?}', 'LibrosController@detalles')
    ->name('libros.detalles')
    ->middleware('pass');

Route::get('/error', 'LibrosController@error')
    ->name('libros.error');

Route::get('/formulario', 'LibrosController@formulario');

Route::post('/validation', 'LibrosController@validation')
    ->name('validation.form');

Route::resource('prueba', 'Prueba_controlador');
Route::resource('usuario', 'UsuariosControlador');



//Route::get('/libros', 'LibrosController@index')
//            ->name('libros.index');

//Route::get('/libros/detalles', 'LibrosController@detalles')
//            ->name('libros.detalles');
