<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateConcourRequest extends FormRequest
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
            'titre' => 'required|max:255',
            'date' => 'required',
            'etablissment' => 'required',
            'pdf' => 'nullable|mimes:pdf|max:10240', 
        ];
    }

    public function messages(): array
{
    return [
        'titre.required' => 'Le titre est obligatoire.',
        'titre.max' => 'Le titre ne doit pas dépasser 255 caractères.',
        'pdf.required' => 'Veuillez télécharger un fichier PDF.',
        'pdf.file' => 'Le fichier doit être un fichier valide.',
        'pdf.mimes' => 'Le fichier doit être de type PDF.',
        'pdf.max' => 'Le fichier ne doit pas dépasser 2 Mo.',
        'date.required' => 'La date est obligatoire.',
        'etablissment.required' => 'L\'établissement est obligatoire.',
    ];
}
}
