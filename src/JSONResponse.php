<?php
namespace StdJsonResponse;

use Illuminate\Http\JsonResponse;

class JSONResponse
{
    public static function success(StdResponse $response, int $code = 200): JsonResponse
    {
        return response()->json([
            'status' => true,
            'message' => $response->message,
            'data' => $response->data,
            'error' => null
        ], $code);
    }

    public static function error(StdResponse $response, int $code = 400): JsonResponse
    {
        return response()->json([
            'status' => false,
            'message' => $response->message,
            'data' => null,
            'error' => $response->error
        ], $code);
    }
}