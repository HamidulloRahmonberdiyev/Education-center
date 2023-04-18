<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewRequest extends FormRequest
{
    public function messages(): array
    {
        return [
            'title.required' => 'Sarlavha kiritilmadi!',
            'photo.required' => 'Rasm kiritilmadi!',
            'short_content.required' => 'Qisqacha mazmuni kiritilmadi!',
            'content.required' => 'Maqola kiritilmadi!',
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
            'title' => 'required|min:3|max:255',
            'short_content' => 'required',
            'content' => 'required',
            'photo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
