<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'title' => 'required|min:5|max:255|' . Rule::unique('blogs', 'title')
                ->ignore($this->title),
            'subject' => 'required|min:10|max:255',
            'publish' => 'required|boolean',
            'tags' => 'required',
            'article' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'publish.boolean' => 'Article status must be Draft or Publish'
        ];
    }
}