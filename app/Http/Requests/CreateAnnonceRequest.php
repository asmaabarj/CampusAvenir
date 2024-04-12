<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAnnonceRequest extends FormRequest
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
            'titre' => 'required|string|max:255',
            'date' => 'nullable|date',
            'temps' => 'nullable',
            'lieu' => 'nullable|string|max:255',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string', 
        ];
    }

    public function messages()
    {
        return [
            'titre.required' => 'Le titre est requis.',
            'description.required' => 'La description est requise.',
            'picture.required' => 'La photo est requise.',
            'picture.image' => 'Le fichier doit être une image.',
            'picture.mimes' => 'L\'image doit être au format jpeg, png, jpg ou gif.',
            'picture.max' => 'L\'image ne doit pas dépasser 2 Mo.',
            'lieu.string' => 'Le lieu doit être une chaîne de caractères.',
            'lieu.max' => 'Le lieu ne doit pas dépasser 255 caractères.',
        ];
    }
    
}
