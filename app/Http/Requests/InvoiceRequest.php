<?php

namespace App\Http\Requests;

use App\Http\Requests\BaseRequest;

class InvoiceRequest extends BaseRequest
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
                    'date'  => 'required|date||date_format:Y-m-d'
                ];
            }
            default:break;
        }
    }
}

