@extends('layouts.app')

@section('title','Funcionários')

@section('content')
<legend>Anexos</legend>
<button class='btn btn-default' id='NovoAnexo'>Novo Anexo</button>  
  <form action="/teste/anexar" enctype="multipart/form-data" method="post" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div id="anexos">
        <!-- RECEBE DIVS DINAMICAS -->
      </div>
  </form>

</fieldset>




@endsection
