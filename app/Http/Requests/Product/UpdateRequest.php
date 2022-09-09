<?php

namespace App\Http\Requests\Product;

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
            'name'=>'string|required|unique:products,name,'.
            $this->route('product')->id.'|string|max:250',
            'image'=> 'dimensions:min_width=100,min_height=200',
            'precio'=> 'required|',
            'category_id'=> 'integer|required',
            'provider_id'=> 'integer|required',
        ];
    }
    public function messages(){
        return [
            'name.required'=>'El campo nombre es requerido.',
            'name.string'=>'El valor nombre no es correcto.',
            'name.max'=>'Solo se permiten 250 caracteres para el nombre.',
            'name.unique'=>'El valor de nombre ya esta registrado.',
            //
            'image.required'=>'El campo image es requerido.',
            'image.dimensions'=>'Solo se permiten imagenes de 100x200 px.',
            //
            'precio.required'=>'El campo precio es requerido.',
            //
            'category_id.required'=>'El campo category_id es requerido.',
            'category_id.integer'=>'El valor category_id tiene que ser entero.',
            //
            'provider_id.required'=>'El campo provider_id es requerido.',
            'provider_id.integer'=>'El valor provider_id tiene que ser entero.',
        ];
    }
}
