<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atestado extends Model{
  protected $fillable=[
    
    'nome_medico',
    'conselho',
    'numero_conselho',
    'data_inicio_atestado',
    'duracao_atestado',
    'cid',
    'atendente',
    'id_funcionario',
    'id_pericia'

];
  public function funcionario(){
    return $this->belongsTo(Funcionario::class, 'id_funcionario');
}

}
