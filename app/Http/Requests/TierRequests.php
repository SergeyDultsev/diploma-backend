<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TierRequests extends FormRequest
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
            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Title is required.',
            'description.required' => 'Description is required.',
            'price.required' => 'Price is required.',
            'title.string' => 'Title must be a string.',
            'description.string' => 'Description must be a string.',
        ];
    }
}
