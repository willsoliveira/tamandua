<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable=[
        
        'nome',
        'cpf',
        'endereco',
        'telefone',
        'matricula',
        'cargo',
        'id_secretaria'
    ];
    public function secretaria(){
        return $this->belongsTo(Secretaria::class, 'id_secretaria');
    }
    public function atestados(){
        return $this->hasMany(Atestado::class,'id_funcionario');
    }

}
