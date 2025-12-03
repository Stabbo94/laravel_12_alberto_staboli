<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleEditRequest extends FormRequest
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
            'title'=>'required|min:10',
            'subtitle'=>'required|min:15',
            'body'=>'required|min:30',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Inserire titolo articolo!',
            'title.min' => 'Inserire titolo articolo di almeno 10 caratteri!',
            'body.required' => 'Inserire contenuto articolo!',
            'subtitle.required' => 'Inserire sottotitolo articolo!',
            
            
        ];
    }
}
