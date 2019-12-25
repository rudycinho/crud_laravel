<?php

namespace App\Http\Requests;

use App\Http\Requests\BaseRequest;

class ProductRequest extends BaseRequest
{
    public function rules()
    {
        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
                return [];
            case 'POST':
            {
                return [
                    'name'  => 'required|string|regex:/^[a-zA-Z ]+$/u|min:3|max:255|unique:products,name',
                    'price' => 'required|regex:/^\d+(\.\d{1,2})?$/u',
                    'stock' => 'required|integer|min:0'
                ];
            }
            case 'PUT':
            {
                $product= $this->product;
                return [
                    'name'  => "required|string|regex:/^[a-zA-Z ]+$/u|min:3|max:255|unique:products,name,$product->id,id",
                    'price' => 'required|regex:/^\d+(\.\d{1,2})?$/u',
                    'stock' => 'required|integer|min:0'
                ];
            }
            default:break;
        }
    }
}
