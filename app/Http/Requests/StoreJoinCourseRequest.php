<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJoinCourseRequest extends FormRequest
{
    public function messages(): array
    {
        return [
            'name.required' => 'Ism kiritilmadi!',
            'category_id.required' => 'Kurs kiritilmadi!',
            'phone.required' => 'Telefon raqam kiritilmadi!',
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
            'category_id' => 'required',
            'phone' => 'required|string|min:9|max:15',
			'message' => 'required|string|min:5|max:500',
        ];
    }
}
