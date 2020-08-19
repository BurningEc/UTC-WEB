<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateDeliveryManPut extends FormRequest
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
            'ci' => ['required','numeric','digits:10',Rule::unique('delivery_men')->ignore($this->id)],
            'ruc' => ['numeric','digits:13',Rule::unique('delivery_men')->ignore($this->id)],
            'name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u|max:255',

            'last_name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u|max:255',
            'birth_date' => 'date',
            'gender' => 'required',
            'email' => ['required','email',Rule::unique('delivery_men')->ignore($this->id),'max:255'],
            'status' => 'required',

            'url_image' => 'mimes:png,jpeg,jpg',

            'vehicle_type' => 'required|string',
            'vehicle_plate' => ['string','required',Rule::unique('delivery_men')->ignore($this->id)],
            'vehicle_year' => 'required|numeric|digits:4',
            'vehicle_make' => 'required|string',
            'vehicle_description' => 'required',
            //'latitude'=>'string',
            //'longitude'=>'string',
            'url_vehicle' => 'mimes:png,jpeg,jpg',

        ];
    }
    public function messages()
    {
        return [
            'ci.unique' => 'El usuario ya existe',
            'ci.digits' => 'El número debe contener 10 carácteres',
            'ci.required' => 'Este campo es obligatorio',
            'ci.numeric' => 'El campo solo acepta números',

            'ruc.unique' => 'El ruc ya existe',
            'ruc.digits' => 'El número debe contener 13 carácteres',
            'ruc.numeric' => 'El campo solo acepta números',

            'name.required' => 'Este campo es obligatorio.',
            'name.regex' => 'Este campo debe contener solo letras.',
            'last_name.required' => 'Este campo es obligatorio.',
            'last_name.regex' => 'Este campo debe contener solo letras.',

            'username.required' => 'Este campo es obligatorio.',
            'username.unique' => 'El usuario ya existe',

            'birth_date.date' => 'Ingrese una fecha valida',

            'gender.required' => 'Este campo es obligatorio.',

            'email.email' => 'No es un correo válido.',
            'email.unique' => 'El correo del usuario ya está en uso.',
            'email.required' => 'El correo del usuario es obligatorio.',

            'status.required' => 'Este campo es obligatorio.',
            'id_rol.required' => 'Este campo es obligatorio.',

            'url_image.mimes' => 'Este formato de la imagen no es valído.',



            'vehicle_type.required' => 'Este campo es obligatorio.',
            'vehicle_type.string' => 'Los datos no son correctos.',

            'vehicle_plate.required' => 'Este campo es obligatorio.',
            'vehicle_plate.string' => 'Los datos no son correctos.',
            'vehicle_plate.unique' => 'El vehiculo ya se encuentra registrado.',


            'vehicle_year.required' => 'Este campo es obligatorio.',
            'vehicle_year.numeric' => 'Este campo debe contener solo números.',
            'vehicle_year.digits' => 'Este campo debe cuatro carácteres.',

            'vehicle_make.required' => 'Este campo es obligatorio.',
            'vehicle_make.regex' => 'Los datos no son correctos.'
            ,
            'vehicle_description.required' => 'Este campo es obligatorio.',
            'url_vehicle.mimes' => 'Este formato de la imagen no es valído.',




        ];
    }
}
