<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCommentRequest extends FormRequest
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
            'contenue' => 'required|string|max:255',
            'publication_id' => 'required_without:etablissment_id|integer|exists:publications,id',
            'etablissment_id' => 'required_without:publication_id|integer|exists:etablissments,id',        ];
    }

    public function messages()
{
    return [
        'contenue.required' => 'Le champ contenu est requis.',
        'contenue.string' => 'Le contenu doit être une chaîne de caractères.',
        'contenue.max' => 'Le contenu ne peut pas dépasser :max caractères.',
        'publication_id.required_without' => 'L\'ID de la publication est requis si l\'ID de l\'établissement n\'est pas fourni.',
        'publication_id.integer' => 'L\'ID de la publication doit être un entier.',
        'publication_id.exists' => 'L\'ID de la publication fourni n\'existe pas.',
        'etablissment_id.required_without' => 'L\'ID de l\'établissement est requis si l\'ID de la publication n\'est pas fourni.',
        'etablissment_id.integer' => 'L\'ID de l\'établissement doit être un entier.',
        'etablissment_id.exists' => 'L\'ID de l\'établissement fourni n\'existe pas.',
    ];
}

}
