<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtistRequest extends FormRequest
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
        'name' => 'required|min:10|max:255',
        'surname' => 'required|min:10|max:252555',
        'date_of_birth' => 'nullable',
        'date_of_death' => 'nullable',
        'place_of_birth' => 'nullable',
        'place_of_death' => 'nullable',
        'profession' => 'nullable',
        'art_movement' => 'required',
        'works' => 'required',
        'biography' => 'nullable'
      ];
    }

    public function messages(){
      return [
        'name.required' => 'Inserisci il nome',
        'name.min' => 'Il nome deve contenere almeno 10 caratteri',
        'name.max' => 'Il nome non può superare i 255 caratteri',
        'surname.required' => 'Inserisci il cognome',
        'surname.min' => 'Il cognome deve contenere almeno 10 caratteri',
        'surname.max' => 'Il cognome non può superare i 255 caratteri',
        'art_movement.required' => 'Inserire la corrente letteraria',
        'works.required' => 'Inserire le opere',
      ];
    }
}
