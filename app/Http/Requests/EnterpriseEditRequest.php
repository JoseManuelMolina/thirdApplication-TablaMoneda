<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnterpriseEditRequest extends FormRequest
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
            'name'          => 'required|min:2|max:60',
            'phone'         => 'required|min:9|max:15',
            'contactperson' => 'required|min:2|max:100',
            'taxnumber'     => 'required|between:5,20',
            'address'       => 'required|min:20',
        ];
    }
    
    public function messages() {
        $required= 'El campo :attribute es obligatorio';
        $min = 'El campo :attribute no tiene la longitud mínima requerida: :min';
        $max = 'El campo :attribute excede la longitud máxima requerida: :max';
        $between = 'El campo :attribute tiene que tener una longitud entre :min y :max caracteres';
        return [
            'name.required'             => $required,
            'name.min'                  => $min,
            'name.max'                  => $max,
            'phone.required'            => $required,
            'phone.min'                 => $min,
            'phone.max'                 => $max,
            'contactperson.required'    => $required,
            'contactperson.min'         => $min,
            'contactperson.max'         => $max,
            'taxnumber.required'        => $required,
            'taxnumber.between'         => $between,
            'address.required'          => $required,
            'address.min'               => $min,
        ];
    }
    
    public function attributes() {
        return [
        'name'          => 'nombre de la empresa',
        'phone'         => 'numero de telefono',
        'contactperson' => 'persona de contacto',
        'taxnumber'     => 'código de identificacion fiscal',
        'address'       => 'dirección',
        ];
    }
}
