<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:10|max:255',
            'price' => 'required|numeric'
        ];
    }

    //aqui voce pode modificar a mensagem de erro
    public function messages():array
{
    return [
        'name.required' => 'O campo nome é obrigatório para atualização.',
        'name.string' => 'O campo nome deve ser uma string.',

        //'price.required' => 'O campo preço é obrigatório para atualização.',
    ];
}
}
