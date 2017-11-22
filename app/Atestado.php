<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atestado extends Model{
  public function funcionario(){
    return $this->belongsTo(Funcionario::class, 'id_funcionario');
}
}
