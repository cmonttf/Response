<?php

namespace StdJsonResponse;

class JSONResponse
{
    public static function success(StdResponse $response): void
    {
        $dato = [
            'status' => true,
            'message' => $response->message,
            'data' => $response->data,
            'error' => null
        ];

        echo json_encode($dato);
    }

    public static function error(StdResponse $response): void
    {
        $dato = [
            'status' => false,
            'message' => $response->message,
            'data' => null,
            'error' => $response->error
        ];

        echo json_encode($dato);
    }
}
