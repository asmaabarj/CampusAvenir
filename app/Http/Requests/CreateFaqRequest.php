<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFaqRequest extends FormRequest
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
            'question' => 'required|string|max:255',
            'reponse' => 'required|string|max:255',
        ];
    }
    public function messages()
    {
        return [
            'question.required' => 'La question est requis.',
            'reponse.required' => 'La reponse est requise.',
            'question.max' => 'La question ne doit pas dépasser 255 caractères.',
        ];
    }
}
