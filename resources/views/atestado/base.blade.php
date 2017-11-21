@extends('layouts.app')

@section('title','Atestados')

@section('content')
  <div class="container">
    <h2>Atestados</h2>
    <div id="funcionario">
      <div class="row">
        <div class="form-group col col-md-7">
          <label for="nome">Nome</label>
          <input type="text" id="nome" name="nome" class="form-control" value=" {{$funcionario->nome}} " disabled  > 
        </div>
        <div class="form-group col col-md-5">
          <label for="matricula">Matricula</label>
          <input type="text" id="matricula" name="matricula" class="form-control" value=" {{$funcionario->cpf}} " disabled > 
        </div>
      </div>
      <div class="row">
        <div class="form-group col col-md-7">
          <label for="cargo">Cargo</label>
          <input type="text" id="cargo" name="cargo" class="form-control" value=" {{$funcionario->cargo}} " disabled > 
        </div>
        <div class="form-group col col-md-5">
          <label for="secretaria">Secretaria</label>
          <input type="text" id="secretaria" name="secretaria" class="form-control" value=" {{$funcionario->secretaria->sigla}} " disabled > 
        </div>

      </div>

    </div>
    <fieldset class="form-group" >
    <legend>Histórico de Atestados</legend>
      <table class='table table-striped table-cordered table-hover' >
      <thead>
        <tr>
          <th>Data</th>
          <th>CID</th>
          <th>Tempo</th>
          <th>Atendente</th>
          <th>Vizualizar</th>
        </tr>
      </thead>
      <tbody>
        {{--    --}}
        <tr>
          <td>data </td>
          <td>cid </td>
          <td> tempo</td>
          <td> pessoa logada no cadastro</td>
          <td>  Visualizar </td>
        </tr>
        
        <tr>
          <td> ... </td>
          <td> ... </td>
          <td> ... </td>
          <td> ... </td>
          <td> Cadastrar Novo </td>
        </tr>
      </tbody>
    </table>
    </fieldset>
  </div>
@endsection