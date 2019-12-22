<?php

namespace App\Http\Requests\Category;

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
        $category = $this->category;
        return [
            'name'        => "required|string|regex:/^[a-zA-Z ]+$/u|min:5|max:255|unique:categories,name,$category->id,id",
            'description' => "string|min:5|max:400"
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