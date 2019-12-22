<?php

namespace App\Http\Requests;

use App\Http\Requests\BaseRequest;

class PaymentModeRequest extends BaseRequest
{
    public function rules()
    {
        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'name'            => 'required|string|regex:/^[a-zA-Z ]+$/u|min:5|max:255|unique:payment_modes,name',
                    'another_details' => 'string|min:5|max:400'
                ];
            }
            case 'PUT':
            {
                $paymentMode = $this->paymentMode;
                return [
                    'name'            => "required|string|regex:/^[a-zA-Z ]+$/u|min:5|max:255|unique:payment_modes,name,$paymentMode->id,id",
                    'another_details' => 'string|min:5|max:400'
                ];
            }
            default:break;
        }
    }
}
