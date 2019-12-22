<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class BaseRequest extends FormRequest
{
    public function authorize()
    {
        return true;
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
