<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtworkRequest extends FormRequest
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
            'title' => 'required|min:20|max:255',
            'type' => 'required',
            'description' => 'nullable',
            'year' => 'nullable',
            'image_path' => 'nullable',
            'image_name' => 'nullable'
        ];
    }

    public function messages(){
      return [
          'title.required' => 'Inserire il titolo',
          'title.min' => 'Il titolo deve contenere almeno 20 caratteri',
          'title.max' => 'Il titolo non può contenere più di 255 caratteri',
          'type.required' => 'Inserire il tipo di opera'
      ];
    }
}
