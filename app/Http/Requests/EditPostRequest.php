<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class EditPostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'title' => ['required'],
            'slug' => [
                'required',
                'string',
                Rule::unique('posts', 'slug')->ignore($this->route('post'))
            ],
            'teaser' => ['nullable'],
            'body' => ['nullable'],
            'published' => ['boolean'],
        ];
    }
}
