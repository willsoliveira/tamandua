<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Funcionario;
Use App\Atestado;
Use App\Pericia;
Use App\Http\Controllers\AnexosController;
use Illuminate\Support\Facades\DB;

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
    $atestado=Atestado::create($input);
    $id_atestado=$atestado->id;
    print_r($input);
    print("<br><br>");
    if (array_key_exists('data_pericia', $input)) {
      $input['id_atestado'] = $id_atestado;
      $pericia=Pericia::create($input);
      $id_fucionario = $request->input('id_funcionario');
      return redirect()->route('atestados',$id_fucionario);
    }
  }
  public function visualizar($id){
    ini_set('memory_limit','1024M');
    $pericia=Pericia::find($id);
   return view('atestados.visualizar', compact('pericia'));
  }
}
