<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDomaineRequest extends FormRequest
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
            'photo' => 'required|max:2048',
        ];
    }
    public function messages()
    {
        return [
            'titre.required' => 'Le titre est requis.',
            'photo.required' => 'La photo est requise.',
            'photo.max' => 'L\'image ne doit pas dépasser 2 Mo.',
        ];
    }
}
