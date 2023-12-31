<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MuseumRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:50',
            'founder' => 'required|min:3|max:50',
            'construction_date' => 'required',
            'number_of_visitors' => 'nullable',
            'number_of_departments'  => 'nullable',
            'geographic_coordinates' => 'required'
        ];
    }

    public function messages(){
      return [
        'name.required' => 'Inserisci il nome',
        'name.min' => 'Il nome deve contenere almeno 3 caratteri',
        'name.max' => 'Il nome non può superare i 255 caratteri',
        'founder.required' => 'Inserisci il nome',
        'founder.min' => 'Il nome deve contenere almeno 5 caratteri',
        'founder.max' => 'Il nome non può superare i 255 caratteri',
        'geographic_coordinates.required' => 'Le coordinate geografiche sono richieste'
      ];
    }
}
