@extends('layouts.app')

@section('title','Funcionários')

@section('content')
  <div class="container">
    <h2>Funcionários</h2>
    <table class='table table-striped table-cordered table-hover' >
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>CPF</th>
          <th>Secretaria</th>
          <th>Ação</th>
        </tr>
      </thead>
      <tbody>
        @foreach($funcionarios as $funcionario)
        <tr>
          <td> {{ $funcionario->id }} </td>
          <td> {{ $funcionario->nome }} </td>
          <td> {{ $funcionario->cpf }} </td>
          <td> {{$funcionario->secretaria->nome}} ( {{$funcionario->secretaria->sigla}} ) </td>
          <td>  <a href="funcionario/{{$funcionario->id}}/editar" class='btn btn-warning'> Editar</a> <a href="/atestado/{{$funcionario->id}}" class='btn btn-success' >Atestado</a> </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection