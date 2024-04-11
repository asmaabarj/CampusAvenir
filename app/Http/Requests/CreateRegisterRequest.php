<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRegisterRequest extends FormRequest
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
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'tele' => 'required|string|max:20',
            'adresse' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            'niveau' => 'required|string|max:50',
            'ecole' => 'required|string|max:100',
            'password' => 'required|string|min:6|same:cpassword',
            'cpassword' => 'required|string|min:6|same:password', 
        
        ];
    }

public function messages()
{
    return    [

        'nom.required' => 'Veuillez entrer votre nom.',
        'nom.string' => 'Le nom doit être une chaîne de caractères.',
        'nom.max' => 'Le nom ne doit pas dépasser 255 caractères.',
        'prenom.required' => 'Veuillez entrer votre prénom.',
        'prenom.string' => 'Le prénom doit être une chaîne de caractères.',
        'prenom.max' => 'Le prénom ne doit pas dépasser 255 caractères.',
        'email.required' => 'Veuillez entrer votre email.',
        'email.email' => 'Veuillez entrer un email valide.',
        'email.max' => 'L\'email ne doit pas dépasser 255 caractères.',
        'email.unique' => 'Cet email est déjà utilisé.',
        'tele.required' => 'Veuillez entrer votre numéro de téléphone.',
        'tele.string' => 'Le téléphone doit être une chaîne de caractères.',
        'tele.max' => 'Le téléphone ne doit pas dépasser 20 caractères.',
        'adresse.required' => 'Veuillez entrer votre adresse.',
        'adresse.string' => 'L\'adresse doit être une chaîne de caractères.',
        'adresse.max' => 'L\'adresse ne doit pas dépasser 255 caractères.',
        'date_naissance.required' => 'Veuillez entrer votre date de naissance.',
        'date_naissance.date' => 'Veuillez entrer une date valide.',
        'niveau.required' => 'Veuillez entrer votre niveau.',
        'niveau.string' => 'Le niveau doit être une chaîne de caractères.',
        'niveau.max' => 'Le niveau ne doit pas dépasser 50 caractères.',
        'ecole.required' => 'Veuillez entrer votre école.',
        'ecole.string' => 'L\'école doit être une chaîne de caractères.',
        'ecole.max' => 'L\'école ne doit pas dépasser 100 caractères.',
        'password.required' => 'Veuillez entrer un mot de passe.',
        'password.string' => 'Le mot de passe doit être une chaîne de caractères.',
        'password.min' => 'Le mot de passe doit contenir au moins 6 caractères.',
        'password.same' => 'Le champ du mot de passe doit correspondre à la confirmation.',
        'cpassword.required' => 'Veuillez confirmer votre mot de passe.',
        'cpassword.string' => 'Le mot de passe doit être une chaîne de caractères.',
        'cpassword.min' => 'Le mot de passe doit contenir au moins 6 caractères.',

    ];
}
}