<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'title_image' => ['required', 'mimetypes:image/jpeg,image/png,image/jpg,image/gif'],
            'description' => ['required'],
            'featured' => ['nullable','boolean'],
            'status' => ['nullable','boolean'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
