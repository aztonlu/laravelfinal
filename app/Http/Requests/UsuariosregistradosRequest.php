<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class usuariosregistradosRequest extends FormRequest
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
            'nombre' => 'min:4|max:30|required',
            'dni' => 'min:4|max:8|required',
            'email' => 'min:4|max:30|required',
            'password' => 'min:4:|max:60|required',
        ];
    }
}
