<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\Misdato;
use App\Models\Habilidade;
use App\Models\Experiencium;
use Illuminate\Http\Request;

class PortafolioController extends Controller
{
  public function index()
  {
      $proyectos = Proyecto::paginate();
      $misdatos = Misdato::paginate();
      $habilidades = Habilidade::paginate();
      $experiencia = Experiencium::paginate();
      return view('welcome', compact('proyectos','misdatos','habilidades','experiencia'));
  }
}
