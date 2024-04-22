<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUniversityRequest extends FormRequest
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
            'nom' => 'required|max:255',
            'domaine_id' => 'required',
            'formation' => 'required',
            'etudiants' => 'required',
            'concours' => 'required',
            'filieres' => 'required',
            'type' => 'required',
            'photo' => 'required|max:2048',
            'description' => 'required',
            'lien' => 'required|url'
        ];
    }

    public function messages()
{
    return [
        'nom.required' => 'Le nom est requis.',
        'nom.max' => 'Le nom ne doit pas dépasser 255 caractères.',
        'domaine_id.required' => 'Le domaine est requis.',
        'formation.required' => 'La formation est requise.',
        'etudiants.required' => 'Le nombre d\'étudiants est requis.',
        'concours.required' => 'Le concours est requis.',
        'filieres.required' => 'Les filières sont requises.',
        'type.required' => 'Le type est requis.',
        'photo.required' => 'La photo est requise.',
        'description.required' => 'La description est requise.',
        'lien.required' => 'Le lien est requis.',
    ];
}

}
