<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable=[
        
        'nome',
        'cpf',
        'endereco',
        'cargo',
        'id_secretaria'
    ];
    public function secretaria(){
        return $this->belongsTo(Secretaria::class, 'id_secretaria');
    }
}
