<?php
namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Exceptions\HttpResponseException;

trait ResponseTrait
{
    protected function response(string $message, $data = "", int $errorCode = 0, string $status = 'success'): JsonResponse
    {
        throw new HttpResponseException(response()->json([
            'error_code'    =>  $errorCode,
            'status'        =>  $status,
            'dev_message'   =>  null,
            'message'       =>  $message,
            'data'          =>  $data
        ], $errorCode));
    }


//    public function response(string $message, $data = "", int $errorCode = 0, string $status = 'success'): JsonResponse
//    {
//        return response()->json([
//            'error_code'    =>  $errorCode,
//            'status'        =>  $status,
//            'dev_message'   =>  null,
//            'message'       =>  $message,
//            'data'          =>  $data,
//        ]);
//    }

//    public function sendResponse(string $message, $data = null, bool $success = true, int $code = 200): JsonResponse
//    {
//        return response()->json([
//            'success'   =>  $success,
//            'message'   =>  $message,
//            'data'      =>  $data,
//            'code'      =>  $code,
//        ], $code);
//    }

//    public function mockResponse(array $data = []): array
//    {
//        return [
//            'error_code'    =>  0,
//            'status'        =>  'success',
//            'message'       =>  'success',
//            'data'          =>  $data,
//        ];
//    }
}
