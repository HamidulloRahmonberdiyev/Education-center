<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVideoRequest extends FormRequest
{
    public function messages(): array
    {
        return [
            'title.required' => 'Sarlavha kiritilmadi!',
            'video.required' => 'Video kiritilmadi!',
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
            'content' => 'required',
            'video' => 'required|file|mimetypes:video/mp4|max:20480',
        ];  
    }
}
