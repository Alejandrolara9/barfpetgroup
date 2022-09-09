<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name'=> 'string|required|max:250',
            'cedula'=> 'string|required|unique:clients,cedula,'.
            $this->route('client')->id.'|max:15',
            'email'=> 'string|required|unique:clients,email,'.
            $this->route('client')->id.'|max:250|email:rfc,dns',
            'direccion'=> 'string|required|max:250',
            'celular'=> 'string|required|unique:clients,celular,'.
            $this->route('client')->id.'|max:12',
        ];
    }
    public function messages(){
        return [
            'name.required'=>'El campo nombre es requerido.',
            'name.string'=>'El valor nombre no es correcto.',
            'name.max'=>'Solo se permiten 250 caracteres para el nombre.',
            //
            'cedula.required'=>'El campo cedula es requerido.',
            'cedula.string'=>'El valor cedula no es correcto.',
            'cedula.unique'=>'Esta cédula ya se encuentra registrada.',
            'cedula.max'=>'Solo se permiten 15 caracteres para la cedula.',
            //
            'email.required'=>'El campo email es requerido.',
            'email.email'=>'No es un correo electrónico.',
            'email.string'=>'El valor email no es correcto.',
            'email.unique'=>'Esta email ya se encuentra registrada.',
            'email.max'=>'Solo se permiten 15 caracteres para la email.',
            //
            'direccion.required'=>'El campo direccion es requerido.',
            'direccion.string'=>'El valor direccion no es correcto.',
            'direccion.max'=>'Solo se permiten 250 caracteres para la direccion.',
            //
            'celular.required'=>'El campo celular es requerido.',
            'celular.string'=>'El valor celular no es correcto.',
            'celular.unique'=>'Esta celular ya se encuentra registrada.',
            'celular.max'=>'Solo se permiten 12 caracteres para la celular.',
        ];
    }
}
