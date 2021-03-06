<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anexo extends Model{
  protected $fillable=[
    
    'nome_arquivo',
    'descricao'
];
  public function atestado(){
    return $this->belongsTo(Atestado::class, 'id_atestado');
  }
}
