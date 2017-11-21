<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Funcionario;
class AtestadoController extends Controller
{
  public function index($id){
    $funcionario=Funcionario::find($id);
    return view('atestado.base', compact('funcionario') );
  }
}
