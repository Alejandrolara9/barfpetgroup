<?php

namespace App\Http\Requests\Provider;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name'=>'required|string|max:255',
            'email'=>'unique:providers|required|string|max:255',
            'nit'=>'unique:providers|required|string|max:15|min:9',
            'celular'=>'unique:providers|required|string|max:15|min:9',
        ];
    }
    public function messages(){
        return [
            // 'name.required'=>'El campo nombre es requerido.',
            // 'name.string'=>'El valor nombre no es correcto.',
            // 'name.max'=>'Solo se permiten 50 caracteres para el nombre.',
            // 'name.min'=>'Solo se permiten mínimo 9 caracteres para el nombre.',
            // 'email.required'=>'El campo email es requerido.',
            // 'email.string'=>'El valor email no es correcto.',
            // 'email.max'=>'Solo se permiten 255 caracteres para el email.',
            // 'email.unique'=>'El email está repetido.',
            // 'nit.required'=>'El campo nit es requerido.',
            // 'nit.string'=>'El valor nit no es correcto.',
            // 'nit.max'=>'Solo se permiten 15 caracteres para el nit.',
            // 'nit.min'=>'Solo se permiten 9 caracteres para el nit.',
            // 'nit.unique'=>'El nit está repetido.',
            // 'celular.required'=>'El campo celular es requerido.',
            // 'celular.string'=>'El valor celular no es correcto.',
            // 'celular.max'=>'Solo se permiten 255 caracteres para el celular.',
            // 'celular.min'=>'Solo se permiten 9 caracteres para el celular.',
            // 'celular.unique'=>'El celular está repetido.',
        ];
    }
}
