<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostsRequest extends Request
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
            'title' => 'required|unique:posts',
            'body' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'The :attribute field is required.',
            'title.unique' => 'There is already another blog post with the same title.'
        ];
    }
}
