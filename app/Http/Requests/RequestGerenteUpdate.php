<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestGerenteUpdate extends FormRequest
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
            'nombre' => 'required',
            'apellido' => 'required',
            'ci' => 'required|max:9|min:7',
            'telefono'=>'required|min:7|max:9',
            'cargo'=>'required',
            'nacimiento'=>'required',
            'email'=>'required|email',
            'direccion' => 'required|min:10|',
            'imagen'=>'image',
            'password' => 'confirmed',
        ];
    }
}
