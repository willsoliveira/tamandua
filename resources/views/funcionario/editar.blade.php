@extends('layouts.app')

@section('title','Funcionários')

@section('content')
  <div class="container">
    <h2> Editar Funcionário: <strong>{{$funcionario->nome}}</strong></h2>

    <form action="atualizar" method="post" url="funcionario/{{$funcionario->id}}/update" >
      <input name='_method' type="hidden" value='PUT'>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" class="form-control" value=" {{$funcionario->nome}} " > 
      </div>
      <div class="form-group">
        <label for="cpf">CPF</label>
        <input type="text" id="cpf" name="cpf" class="form-control" value=" {{$funcionario->cpf}} "> 
      </div>
      <div class="form-group">
        <label for="endereco">Endereço</label>
        <input type="text" id="endereco" name="endereco" class="form-control" value=" {{$funcionario->endereco}} "> 
      </div>
      <div class="form-group">
        <label for="cargo">Cargo</label>
        <input type="text" id="cargo" name="cargo" class="form-control" value=" {{$funcionario->cargo}} "> 
      </div>
      <div class="form-group">
        <label for="secretaria">Secretaría</label>
        <select id="id_secretaria" name="id_secretaria" class="form-control">
          <option value=" {{$funcionario->id_secretaria}} ">{{$funcionario->secretaria->nome}} </option>
          @foreach (App\Secretaria::all() as $secretaria)
            <option value=" {{$secretaria->id}} "> {{$secretaria->nome}} </option>
          @endforeach
        </select>
      </div>
      <div class="form-group-sm">
      <button type="submit" name = "salvar" value= 'salvar' class="btn btn-default">Salvar Mudanças</button> <a class="btn btn-warning" href="/funcionario">Cancelar</a>
      </div>
      
      
    </form>

  </div>
@endsection