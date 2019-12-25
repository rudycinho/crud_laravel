<?php

namespace App\Http\Requests;

use App\Http\Requests\BaseRequest;

class CategoryRequest extends BaseRequest
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
                    'name'        => 'required|string|regex:/^[a-zA-Z ]+$/u|min:3|max:255|unique:categories,name',
                    'description' => 'string|min:5|max:400'
                ];
            }
            case 'PUT':
            {
                $category = $this->category;
                return [
                    'name'        => "required|string|regex:/^[a-zA-Z ]+$/u|min:3|max:255|unique:categories,name,$category->id,id",
                    'description' => "string|min:5|max:400"
                ];
            }
            default:break;
        }
    }
}
