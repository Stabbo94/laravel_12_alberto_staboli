<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductEditRequest extends FormRequest
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
            'name'=>'required|min:10',
            'description'=>'required|min:15',
            'price'=>'required|min:1',
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => 'Inserire nome prodotto / pacchetto di almeno 10 caratteri!',
            'description.required' => 'Inserire descrizione!',
            'price.required' => 'Inserire il prezzo!',
            
            
        ];
    }
}
