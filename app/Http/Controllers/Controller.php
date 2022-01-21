<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected static function response($statusCode, $data, $message = null): JsonResponse
    {
        return response()->json([
            'success' => boolval($statusCode == 200),
            'statusCode' => $statusCode,
            'message' => $message ?? self::getDefaultMessage($statusCode),
            'data' => $data,
        ], $statusCode);
    }

    protected static function getDefaultMessage(int $statusCode)
    {
        return trans("http-messages.$statusCode");
    }
}
