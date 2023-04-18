<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeacherRequest extends FormRequest
{

    public function messages(): array
    {
        return [
            'name.required' => 'F.I.Sh kiritilmadi!',
            'photo.required' => 'Rasm kiritilmadi!',
            'title.required' => 'Sohasi kiritilmadi!',
            'content.required' => 'Ma\'lumot kiritilmadi!',
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
            'title' => 'required|min:3|max:255',
            'content' => 'required',
            'photo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
