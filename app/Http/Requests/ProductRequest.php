<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:255',
            'thumbnail' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'production' => 'nullable|numeric',
            'sell' => 'nullable|numeric|regex:[0-9]',
            'is_showed' => 'required|boolean',
            'description' => 'required',
        ];
    }
}