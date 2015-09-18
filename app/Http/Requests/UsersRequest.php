<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UsersRequest extends Request
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
            'email' => 'required|unique:users',
            'password' => 'required|alpha_num|confirmed|min:6'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'The :attribute field is required.',
            'email.unique' => 'We already have a user account that uses this email address.',
            'password.alpha_num' => 'Your password must only contain letters and numbers.',
            'password.confirmed' => 'Your password confirmation does not match your password.',
            'password.min:6' => 'Your password must have at least 6 characters.'
        ];
    }
}
