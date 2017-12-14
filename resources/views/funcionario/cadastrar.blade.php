@extends('layouts.app')

@section('title','Funcionários')

@section('content')
  <form action="enviar" method="post" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome"> 
    </div>
    <div class="form-group">
      <label for="cpf">CPF</label>
      <input type="text" id="cpf" name="cpf" class="form-control" placeholder="CPF"> 
    </div>
    <div class="form-group">
      <label for="matricula">Matrícula</label>
      <input type="text" id="matricula" name="matricula" class="form-control" placeholder="Matrícula"> 
    </div>
    <div class="form-group">
      <label for="telefone">Telefone</label>
      <input type="text" id="telefone" name="telefone" class="form-control" placeholder="Telefone"> 
    </div>
    <div class="form-group">
      <label for="endereco">Endereço</label>
      <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Endereço"> 
    </div>
    <div class="form-group">
      <label for="cargo">Cargo</label>
      <input type="text" id="cargo" name="cargo" class="form-control" placeholder="Cargo"> 
    </div>
    <div class="form-group">
      <label for="secretaria">Secretaría</label>
      <select id="id_secretaria" name="id_secretaria" class="form-control">
        <option value="null">Selecione</option>
        @foreach (App\Secretaria::all() as $secretaria)
          <option value=" {{$secretaria->id}} "> {{$secretaria->sigla}} </option>
        @endforeach
      </select>
    </div>
    <div class="form-group-sm">
    <button type="submit" name = "salvar" value= 'salvar' class="btn btn-primary">Salvar</button> 
    <a href="/funcionario" class="btn btn-warning btn-md active" >Calcelar</a>
    
    </div>
    
    
  </form>

@endsection