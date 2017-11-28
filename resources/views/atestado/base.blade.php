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
        @foreach($funcionario->atestados as $atestado)
        <tr>
          <td> {{date('d/m/Y',strtotime($atestado->data_inicio_atestado))}} </td>
          <td> {{$atestado->cid}} </td>
          <td> {{$atestado->duracao_atestado}} dias</td>
          <td> {{$atestado->atendente}} </td>
          <td> Visualizar </td>
        </tr>
       @endforeach
        <tr>
          <td> ... </td>
          <td> ... </td>
          <td> ... </td>
          <td> ... </td>
          <td>  
            {{--  Botão de Inicio   --}}
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#novoAtestado" > Novo </a>
                <!-- Modal -->
                <div class="modal fade" id="novoAtestado" tabindex="-1" role="dialog" aria-labelledby="modalNovoAtestado" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalNovoAtestado">Novo Atestado</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="enviar" method="post" >
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">

                          <div class="row">
                              <div class="form-group form-inline col-12">
                                <label class="col-form-label" for="data_inicio_atestado">Data do Atestado: </label>
                                <input type="date" id="data_inicio_atestado" name="data_inicio_atestado"  class="col-sm form-control" placeholder="Escolha a data"> 
                              </div>
                              <div class="form-group form-inline col-12">
                                <label  class="col-form-label" for="duracao_atestado">Período: </label>
                                <input type="number" id="duracao_atestado" name="duracao_atestado"  class="col-sm form-control" placeholder="Dias"> 
                              </div>
                              <div class="form-group form-inline col-12">
                                <label  class="col-form-label" for="cid">CID: </label>
                                <input type="text" id="cid" name="cid"  class="col-sm form-control" placeholder="CID"> 
                              </div>
                          </div>
                          <div class="row">
                            <div class="form-group col-12" >
                              <label class="col-form-label" for="nome_medico">Médico </label>
                              <input class='col-sm form-control' type="text" id="nome_medico" name="nome_medico"  placeholder="Nome do Médico"> 
                            </div>
                            <div class="form-group col-12" >
                              <label class="col-form-label" for="conselho">Conselho</label>
                              <input type="text" id="conselho" name="conselho" class="col-sm form-control" placeholder="conselho">
 
                              <label class="col-form-label" for="numero_conselho">Nº do Conselho</label>
                              <input type="text" id="numero_conselho" name="numero_conselho" class="col-sm form-control" placeholder="Número do Conselho"> 
                            </div>
                          </div>
                          
                          <fieldset class="row form-group">
                          <legend>Perícia</legend>
                            <div class="form-group col-12">
                              <label for="data_pericia" class="col-form-label">Data da Pericia</label>
                              <input type="date" name="data_pericia" id="data_pericia" class="form-control col-sm" placeholder="Escolha a data" >
                              <label for="horario_pericia" class="col-form-label">Horário da Pericia</label>
                              <input type="time" name="horario_pericia" id="horario_pericia" class="form-control col-sm">
                            </div>
                            <div class="form-group col-12">
                              <label for="local_pericia" class="col-form-label">Local da Pericia</label>
                              <input type="text" name="local_pericia" id="local_pericia" class="form-control col-sm" placeholder="Local da Perícia" >
                            </div>
                          </fieldset>
                          <fieldset class="row form-group">
                          <legend>Anexos</legend>
                            <div class="form-group form-inline col-12">
                              <label for="nome_arquivo" class="col-form-label" >Nome: </label>
                              <input type="text" name="nome_arquivo" id="nome_arquivo" class="form-control col-sm" placeholder="Nome do Anexo" >
                            </div>
                          
                            <div class="form-group form-inline col-12">
                              <label for="local_anexo" class="col-form-label" >Local do Anexo: </label>
                              <input type="text" name="local_anexo" id="local_anexo" class="form-control col-sm"  placeholder="Local do Anexo" >
                            </div>
                            
                          </fieldset>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
          </td>

        </tr>
      </tbody>
    </table>
    </fieldset>
  </div>
@endsection