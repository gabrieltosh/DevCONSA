<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestGerenteCreate extends FormRequest
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
                'ci' => 'required|max:9|min:7|unique:users',
                'telefono'=>'required|min:7|max:9|unique:users',
                'cargo'=>'required',
                'nacimiento'=>'required',
                'genero'=>'required',
                'email'=>'required|email|unique:users',
                'direccion' => 'required|min:10|',
                'imagen'=>'required|image',
                'password' => 'required|min:6|confirmed',
            ];
    }
}
