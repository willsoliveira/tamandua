<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;

class FuncionarioController extends Controller
{
  public function index(){
    $funcionarios = Funcionario::all();
    return view('funcionario.funcionarios',['funcionarios'=>$funcionarios]);
  }

  public function cadastrar(){
    return view('funcionario.cadastrar');
  }
  public function gravar(Request $request  )
  {
      // $input = $request->all();
      // Funcionario::create($input);
      return redirect('funcionario');

  }
  public function editar($id){
    $funcionario=Funcionario::find($id);
    return view('funcionario.editar', compact('funcionario') );
  }

  public function atualizar(Request $request, $id){
    $funcionario = Funcionario::find($id)->update($request->all());
    return redirect('funcionario');
  }

  public function remover($id){
    Funcionario::find($id)->delete();
    return redirect('funcionario');
  }

  public function atestado($id_funcionario){
      return $id_funcionario;
  }
}


