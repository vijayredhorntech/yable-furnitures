<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductVariationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'price' => ['required', 'numeric'],
            'discount' => ['required', 'numeric'],
            'images.*' => ['required', 'image', 'mimes:jpg,jpeg,png,gif,svg', 'max:1024'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
