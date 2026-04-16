<?php

namespace App\Helpers;

use Illuminate\Http\JsonResponse;

class ResponseHelper
{
    public static function jsonResponse($success, $message, $data, $statusCode): JsonResponse
    {
        return response()->json([
            'status' => $success ? 'success' : 'error',
            'message' => $message,
            'data' => $data,
        ], $statusCode);
    }
}
