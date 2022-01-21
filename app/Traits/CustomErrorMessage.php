<?php
namespace App\Traits;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

trait CustomErrorMessage
{
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'error_code' => 422,
            'status'     => 'error',
            'message'    => $validator->errors()->first(),
            'data'       => null
        ], 422));
    }
}
