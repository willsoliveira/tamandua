@extends('layouts.app')

@section('title','Novos Atestados')

@section('content')

<fieldset>
  <legend class="text-center"> Visualização do Atestado {{$pericia->atestado->id}} do Funcionário <strong>{{$pericia->atestado->funcionario->nome}}</strong> </legend>
    <div class="row">
        <div class="form-group form-inline col-4">
          <label class="col-form-label" for="data_inicio_atestado">Data do Atestado: </label>
          <input type="text" id="data_inicio_atestado" name="data_inicio_atestado"  class="col-sm form-control" value=" {{date('d/m/Y',strtotime($pericia->atestado->data_inicio_atestado))}} " disabled > 
        </div>
        <div class="form-group form-inline col-4">
          <label  class="col-form-label" for="duracao_atestado">Período: </label>
          <input type="text" id="duracao_atestado" name="duracao_atestado"  class="col-sm form-control" value="{{$pericia->atestado->duracao_atestado}} dias" disabled > 
        </div>
        <div class="form-group form-inline col-4">
          <label  class="col-form-label" for="cid">CID: </label>
          <input type="text" id="cid" name="cid"  class="col-sm form-control" value=" {{$pericia->atestado->cid}}" disabled > 
        </div>
    </div>

    <div class="row">
      <div class="form-group form-inline col-5" >
        <label class="col-form-label" for="nome_medico">Médico </label>
        <input class='col-sm form-control' type="text" id="nome_medico" name="nome_medico"   value=" {{$pericia->atestado->nome_medico}}" disabled> 
      </div>
      <div class="form-group form-inline col-6" >
        <label class="col-form-label" for="conselho">Conselho</label>
        <input type="text" id="conselho" name="conselho" class="col-sm-3 form-control"  value=" {{$pericia->atestado->conselho}}" disabled >
        <label class="col-form-label" for="numero_conselho">Nº do Conselho</label>
        <input type="text" id="numero_conselho" name="numero_conselho" class="col-sm form-control"  value=" {{$pericia->atestado->numero_conselho}}" disabled> 
      </div>
    </div>
    
    <fieldset class="form-group border-field">
    <legend class="border-field">Perícia</legend>
      <div class="form-group col-12 form-inline">
        <label for="data_pericia" class="col-form-label">Data da Pericia</label>
        <input type="text" name="data_pericia" id="data_pericia" class="form-control col-sm"  value=" {{$pericia->data_pericia}} " disabled>
        <label for="horario_pericia" class="col-form-label">Horário da Pericia</label>
        <input type="text" name="horario_pericia" id="horario_pericia" class="form-control col-sm" value="{{$pericia->horario_pericia}} " disabled>
      </div>
      <div class="form-group col-12">
        <label for="local_pericia" class="col-form-label">Local da Pericia</label>
        <input type="text" name="local_pericia" id="local_pericia" class="form-control col-sm" value=" {{$pericia->local_pericia}} " disabled >
      </div>
    </fieldset>
  
    <div class="form-group row">
      <a class="btn btn-warning col-md" href="#">Imprimir</a><div class="col-1"> </div> <a class="btn btn-primary col-md" href="/atestado/{{$pericia->  atestado->funcionario->id}}">Voltar</a>
    </div>
  </form>
</fieldset>
@endsection