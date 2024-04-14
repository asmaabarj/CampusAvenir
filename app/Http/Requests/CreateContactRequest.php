<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateContactRequest extends FormRequest
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
            'nom' => 'required',
            'email' => 'required|email',
            'tel' => 'required',
            'message' => 'required',
        ];
    }
    public function messages(): array
{
    return [
        'nom.required' => 'Le nom est obligatoire.',
        'email.required' => "L'adresse e-mail est obligatoire.",
        'email.email' => "L'adresse e-mail doit être une adresse e-mail valide.",
        'tel.required' => 'Le numéro de téléphone est obligatoire.',
        'message.required' => 'Le message est obligatoire.',
    ];
}

}
