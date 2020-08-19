<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDeliveryManPost extends FormRequest
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
            'name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'last_name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'ci' => 'required|numeric|unique:delivery_men',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:delivery_men',
            'vehicle_type' => 'required',
            'vehicle_plate' => 'string|string',
            'vehicle_year' => 'required|numeric|digits:4',
            'vehicle_make' => 'required|string',
            'vehicle_description' => 'required',
            'url_file'=>'required|mimes:pdf'
        ];
    }
    public function messages()
    {
        return [
            'ci.unique' => 'El usuario ya existe',
            'ci.required' => 'Este campo es obligatorio',
            'ci.numeric' => 'El campo solo acepta números',
            'name.required' => 'Este campo es obligatorio.',
            'name.regex' => 'Este campo debe contener solo letras.',
            'last_name.required' => 'Este campo es obligatorio.',
            'last_name.regex' => 'Este campo debe contener solo letras.',
            'address.required' => 'Este campo es obligatorio.',
            'phone.required' => 'Este campo es obligatorio.',
            'email.email' =>'No es un correo válido.',
            'email.unique' => 'El correo del usuario ya está en uso.',
            'email.required' => 'El correo del usuario es obligatorio.',


            'vehicle_type.required' => 'Este campo es obligatorio.',


            'vehicle_plate.required' => 'Este campo es obligatorio.',
            'vehicle_plate.string' => 'Los datos no son correctos.',

            'vehicle_year.required' => 'Este campo es obligatorio.',
            'vehicle_year.numeric' => 'Este campo debe contener solo números.',
            'vehicle_year.digits' => 'Este campo debe cuatro carácteres.',

            'vehicle_make.required' => 'Este campo es obligatorio.',
            'vehicle_make.regex' => 'Los datos no son correctos.'
            ,
            'vehicle_description.required' => 'Este campo es obligatorio.',
            'url_file.required' => 'Este campo es obligatorio.',
            'url_file.mimes' => 'El documento debe tener un formato pdf.',



        ];
    }
}
