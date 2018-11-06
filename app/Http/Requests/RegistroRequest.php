<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegistroRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'persona.nombre' => 'required',
            'persona.edad' => 'required | numeric | between:10,100',
            'usuario.username' => 'required',
            'usuario.password' => 'required',
            'usuario.rol' => 'required'
        ];
    }

    public function messages() {
        return [
            '*.required' => 'Obligatorio',
            '*.numeric' => 'El campo debe ser numerico',
            '*.between' => 'El campo debe estar entre :min - :max',
        ];
    }
}
