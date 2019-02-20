<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //para poder rodar é preciso retornar true
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
            'nome' => 'required | min:5',
            'email' => 'required | max:10'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Informe um nome válido',
            'email.required' => 'Informe um email válido',
            'nome.min' => 'Informe um nome com no mínimo 5 caracteres',
            'email.max' => 'Informe um email com menos de 10 caracteres'
        ];
    }
}
