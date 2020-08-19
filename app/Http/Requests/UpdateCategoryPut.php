<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCategoryPut extends FormRequest
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
            'name'=>['required','regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',Rule::unique('categories')->ignore($this->id)],
            'description'=>'required|string',
            'status'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Este campo es obligatorio.',
            'name.regex' => 'Este campo debe contener solo letras.',
            'name.unique' => 'Esta categoría ya existe.',
            'description.required' => 'Este campo es obligatorio.',
            'status.required' => 'Este campo es obligatorio.',
        ];
    }
}
