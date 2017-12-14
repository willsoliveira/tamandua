<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Funcionario;
Use App\Atestado;
Use App\Http\Controllers\AnexosController;

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
  public function salvarAtestado(Request $request){
    $input = $request->all();
    Atestado::create($input);
    $id_fucionario = $request->input('id_funcionario');
    return redirect()->route('atestados',$id_fucionario);
  }
  public function visualizar($id){
    $atestado=Atestado::find($id);
    return view('atestados.visualizar', compact('atestado'));
  }
}
