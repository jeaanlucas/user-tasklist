<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Rules\CampoVazio;

class CriarUsuarioRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'aniversario' => 'required',
            'senha' => 'required',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
