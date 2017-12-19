<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pericia extends Model
{
  //
  protected $fillable=[
        
    "id_atestado",
    "data_pericia",
    "horario_pericia",
    "local_pericia"
];
public function atestado(){
  return $this->belongsTo(Atestado::class, 'id_atestado');
}
}
