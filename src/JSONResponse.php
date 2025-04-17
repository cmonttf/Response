<?php

namespace StdJsonResponse;

class JSONResponse
{
    public static function success(StdResponse $response): array
    {
        return [
            'status' => true,
            'message' => $response->message,
            'data' => $response->data,
            'error' => null
        ];
    }

    public static function error(StdResponse $response): array
    {
        return [
            'status' => false,
            'message' => $response->message,
            'data' => null,
            'error' => $response->error
        ];
    }
}
