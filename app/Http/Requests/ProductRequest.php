<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'category_id' => ['required', 'exists:categories,id'],
            'summary' => ['required','string'],
            'description' => ['required','string'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
