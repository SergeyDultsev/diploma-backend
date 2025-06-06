<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OtpRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => 'required|email',
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'Email is required',
            'email.email' => 'The email must be a valid email address.',
            'email.unique' => 'This email is already registered.',
        ];
    }
}
