<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() // para usuarios logueados
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'  => 'required|max:15',
            'category'  => 'required|max:15',
            'description'  => 'required|min:10'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Nombre del Curso', // sobreescribe el mensaje de validación de atributos de validation.php
        ];
    }

    public function messages()
    {
        return [
            'description.required' => 'Por favor, ingrese una descripción del curso', // sobreescribe el mensaje de validación required
        ];
    }
}
