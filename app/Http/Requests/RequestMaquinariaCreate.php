<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestMaquinariaCreate extends FormRequest
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
            'imagen'=>'required|image',
            'placa'=>'required|unique:maquinarias',
            'modelo'=>'required',
            'color'=>'required',
            'marca'=>'required',
            'kilometraje'=>'required',
            'tipo'=>'required',
            'combustible_id'=>'required'
        ];
    }
}
