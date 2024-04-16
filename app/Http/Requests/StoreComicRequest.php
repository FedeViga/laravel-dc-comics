<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' =>'required|max:255',
            'description' =>'required|max:2000',
            'thumb' =>'required|max:1000',
            'price' =>'required|max:10',
            'series' =>'required|max:50',
            'sale_date' =>'required',
            'type' =>'required|max:50',
            'artists' =>'required|max:1000',
            'writers' =>'required|max:1000'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Il campo :attribute deve essere compilato.',
            'max' => 'Il campo :attribute può contenere un massimo di :max caratteri.'
        ];
    }

    public function attributes(): array
{
        return [
            'title' =>'Titolo',
            'description' =>'Descrizione',
            'thumb' =>'Immagine',
            'price' =>'Prezzo',
            'series' =>'Serie',
            'sale_date' =>'Data di pubblicazione',
            'type' =>'Tipo',
            'artists' =>'Artisti',
            'writers' =>'Scrittori'
        ];
}
}
