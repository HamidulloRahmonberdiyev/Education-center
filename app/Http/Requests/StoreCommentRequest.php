<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
{
    public function messages(): array
    {
        return [
            'name.required' => 'Ism kiritilmadi!',
            'message.required' => 'Xabar kiritilmadi!', 
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
            'name' => 'required|string|min:3|max:255',
			'message' => 'required|string|min:10|max:500',
        ];
    }
}
