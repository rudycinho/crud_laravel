<?php

namespace App\Http\Requests;

use App\Http\Requests\BaseRequest;

class DetailRequest extends BaseRequest
{
    public function rules()
    {
        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
                return [];
            case 'POST':
            case 'PUT':
            {
                return [
                    'quantity'   => 'required|integer|min:0',
                    'price'      => 'required|numeric|min:0|regex:/^\d+(\.\d{1,2})?$/u'
                ];
            }
            default:break;
        }
    }
}
