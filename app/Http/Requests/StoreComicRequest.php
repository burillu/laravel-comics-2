<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //ricordarsi di cambiare il return in true
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'title' => 'required | min:3',
            'description' => 'nullable',
            'thumb' => 'nullable',
            'price' => 'required | max:20',
            'sale_date' => 'required',
            'series' => 'required | max:100',
            'type' => 'required',
        ];
    }
    /**
     * aggiungere funzione messages per personalizzare i messaggi di errore
     */
    public function messages()
    {
        return [
            'title.required' => 'Il campo titolo è obbligatorio',
            'title.min' => 'Il campo titolo deve avere minimo :min caratteri',
            'price.required' => 'Il campo price è obbligatorio',
            'price.max' => 'Il campo price deve avere massimo max: caratteri',
            'sale_date.required' => 'Il campo data è obbligatorio',
            'series.required' => 'Il campo serie è obbligatorio',
            'type.required' => 'Il campo tipo è obbligatorio',
        ];
    }
}
