<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name'=>'required|min:5',
            'description'=>'required|min:10',
            'price'=>'required|numeric|min:1',
            'img'=>'required|image'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Inserire nome del prodotto!',
            'name.min' => 'Inserire nome prodotto di almeno 5 caratteri!',
            'description.required' => 'Inserire descrizione del prodotto!',
            'price.required' => 'Inserire prezzo del prodotto!',
            'img.required' => 'Allegare immagine del prodotto!',
            'img.image' => 'Allegare solo file di tipo immagine!',

        ];
    }
}
