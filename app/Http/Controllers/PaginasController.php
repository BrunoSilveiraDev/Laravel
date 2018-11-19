<?php

namespace App\Http\Controllers;
use App\Comida;
use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function home() {
      return view('home');
    }

    public function contato() {
      return view('contato');
    }

    public function sobre() {
      return view('sobre');
    }

    public function comida() {
      $comidas = Comida::paginate(3);
      return view('comidas.visualizar', compact('comidas'));
    }
}
