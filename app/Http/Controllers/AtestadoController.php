<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Funcionario;
class AtestadoController extends Controller
{
  public function index($id){
    $funcionario=Funcionario::find($id);
    return view('atestados.base', compact('funcionario') );
  }
  public function novoAtestado($id){
    $funcionario=Funcionario::find($id);
    return view('atestados.novoAtestado', compact('funcionario'));
  }
  public function atestado(Request $request){
    $input = $request->all();
    print_r($input);
  }
}
