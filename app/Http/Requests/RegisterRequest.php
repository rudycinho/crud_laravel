<?php

namespace App\Http\Requests;

use App\Http\Requests\BaseRequest;

class RegisterRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'name'           => 'required',
            'email'          => 'required|email',
            'password'       => 'required',
            'repeat_password'=> 'required|same:password',

        ];
    }
}
