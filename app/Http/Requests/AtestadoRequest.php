<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AtestadoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome_medico'=>'required',
            'conselho'=>'required',
            'numero_conselho'=>'required',
            'data_inicio_atestado'=>'required',
            'duracao_atestado'=>'required',
            'cid'=>'required',
            'atendente'=>'required',
            'id_funcionario'=>'required',
            'data_pericia'=>'nullable|null',
            'horario_pericia'=>'nullable|null',
            'local_pericia'=>'nullable|null'
        
        ];
    }
}
