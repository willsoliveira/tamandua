<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atestado extends Model
{
  public function anexo(){
    return $this->belongsTo(Anexo::class, 'id_anexo');
}
}
