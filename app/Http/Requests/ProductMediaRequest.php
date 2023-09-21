<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductMediaRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'images.*' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
