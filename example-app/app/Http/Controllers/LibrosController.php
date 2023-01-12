<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibrosController extends Controller
{

    public function index($titulo = "Listado de Libros"): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('libros.index',[
                'titulo'=>$titulo,
            ]);
    }
//    public function index(): \Illuminate\Http\RedirectResponse
//    {
//        return redirect()->route('libros.detalles');
//    }

    public function detalles($password = null): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('libros.detalles');
    }

    public function error(){
        return view('libros.error');
    }
}
