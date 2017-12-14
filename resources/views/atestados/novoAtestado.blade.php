@extends('layouts.app')

@section('title','Novos Atestados')

@section('content')
<fieldset>
  <legend class="text-center"> Novo Atestado de <strong>{{$funcionario->nome}}</strong> </legend>
    <form action="salvar" enctype="multipart/form-data" method="post" >
     
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="atendente" value="{{Auth::user()->name}}"  >
    <input type="hidden" name="id_funcionario" value="{{$funcionario->id}}"  >

    <div class="row">
        <div class="form-group form-inline col-4">
          <label class="col-form-label" for="data_inicio_atestado">Data do Atestado: </label>
          <input type="date" id="data_inicio_atestado" name="data_inicio_atestado"  class="col-sm form-control" placeholder="Escolha a data"> 
        </div>
        <div class="form-group form-inline col-4">
          <label  class="col-form-label" for="duracao_atestado">Período: </label>
          <input type="number" id="duracao_atestado" name="duracao_atestado"  class="col-sm form-control" placeholder="Dias"> 
        </div>
        <div class="form-group form-inline col-4">
          <label  class="col-form-label" for="cid">CID: </label>
          <input type="text" id="cid" name="cid"  class="col-sm form-control" placeholder="CID"> 
        </div>
    </div>

    <div class="row">
      <div class="form-group form-inline col-5" >
        <label class="col-form-label" for="nome_medico">Médico </label>
        <input class='col-sm form-control' type="text" id="nome_medico" name="nome_medico"  placeholder="Nome do Médico"> 
      </div>
      <div class="form-group form-inline col-6" >
        <label class="col-form-label" for="conselho">Conselho</label>
        <input type="text" id="conselho" name="conselho" class="col-sm-3 form-control" placeholder="conselho">
        <label class="col-form-label" for="numero_conselho">Nº do Conselho</label>
        <input type="text" id="numero_conselho" name="numero_conselho" class="col-sm form-control" placeholder="Número do Conselho"> 
      </div>
    </div>
    
    <fieldset class="form-group border-field">
    <legend class="border-field">Perícia</legend>
    <button class='btn btn-default' id='NovaPericia'>Nova Perícia</button>
      <div class="row" id="pericia">
          {{--  DIV de Pericia Dinamica  --}}
      </div>
    </fieldset>

    {{--  <fieldset class="form-group border-field">
    <legend class="border-field">Anexos</legend>
      <button class='btn btn-default' id='NovoAnexo'>Novo Anexo</button>  
          <div id="anexos">
            <!-- RECEBE DIVS DINAMICAS -->
          </div>
    </fieldset>  --}} <!--IMPLEMENTAR ANEXOS-->

    <div class="form-group row">
      <button type="submit" name = "salvar" value= 'salvar' class="btn btn-primary col-md">Salvar</button><div class="col-1"> </div> <a class="btn btn-warning col-md" href="/atestado/{{$funcionario->id}}">Cancelar</a>
    </div>
  </form>
</fieldset>
@endsection