<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CommentsRequest extends Request
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
            'body' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'body.required' => 'Your comment is blank.'
        ];
    }

    // Help the view access only comments' error messages
    public $errorBag = 'comments';
}
