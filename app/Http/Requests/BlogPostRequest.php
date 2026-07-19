<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Override;

class BlogPostRequest extends FormRequest
{
   
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'bail|required|unique:post',
            'author' => 'required',
            'body' => 'required'
        ];
    }

    #[Override]
    public function messages()
    {
        return [
            'title.required' => 'Field is required',
            'author.required' => 'Field is required',
            'body.required' => 'Field is required'
        ];
    }
}
