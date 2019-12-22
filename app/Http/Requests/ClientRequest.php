<?php

namespace App\Http\Requests;

use App\Http\Requests\BaseRequest;

class ClientRequest extends BaseRequest
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
                    'name'      => 'required|string|regex:/^[a-zA-Z ]+$/u|min:5|max:255',
                    'last_name' => 'required|string|regex:/^[a-zA-Z ]+$/u|min:5|max:255',
                    'address'   => 'required|string|regex:/^[a-zA-Z0-9 ]+$/u|max:255',
                    'birth_date'=> 'required|date||date_format:Y-m-d',
                    'phone'     => 'string|regex:/^[0-9]+$/u|min:7',
                    'email'     => 'required|string|unique:clients,email|email'
                ];
            }
            case 'PUT':
            {
                $client = $this->client;
                return [
                    'name'      => 'required|string|regex:/^[a-zA-Z ]+$/u|min:5|max:255',
                    'last_name' => 'required|string|regex:/^[a-zA-Z ]+$/u|min:5|max:255',
                    'address'   => 'required|string|regex:/^[a-zA-Z0-9 ]+$/u|max:255',
                    'birth_date'=> 'required|date||date_format:Y-m-d',
                    'phone'     => 'string|regex:/^[0-9]+$/u|min:7',
                    'email'     => "required|string|email|unique:clients,email,$client->id,id"
                ];
            }
            default:break;
        }
    }
}
