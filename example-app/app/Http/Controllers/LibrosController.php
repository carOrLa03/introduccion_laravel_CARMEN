<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibrosController extends Controller
{
    //
//    public function index($titulo = "Listado de Libros"){
//        return view('libros.index',[
//                'titulo'=>$titulo,
//            ]);
//    }
    public function index(){
        return redirect ('/detalles');
    }
}
