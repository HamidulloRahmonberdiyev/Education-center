<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{

    public function messages(): array
    {
        return [
            'name.required' => 'Login kiritilmadi!',
            'email.required' => 'Email kiritilmadi!',
            'password.required' => 'Parol kiritilmadi!',
            'password_confirmation.required' => 'Parol tasdiqlanmadi!',
        ];
    }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:255',
            'email' => 'required|email:rfc|email|max:255',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
        ];
    }
}
