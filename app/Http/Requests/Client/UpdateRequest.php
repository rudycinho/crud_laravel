<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class UpdateRequest extends FormRequest
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

    public function failedValidation(Validator $validator){
        $errors = (new ValidationException($validator))->errors();

        throw new HttpResponseException(response()->json(
            [
                'success' => false,
                'data'    => $errors,
                'message' => 'ERROR VALIDATING FIELDS'
            ],
            JsonResponse::HTTP_UNPROCESSABLE_ENTITY
        ));
    }
}
