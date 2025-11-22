<?php

namespace StdJsonResponse;

class JSONResponse
{
    public static function send(StdResponse $response): void
    {
        $dato = [
            'status' => $response->status,
            'message' => $response->message,
            'data' => $response->status ? $response->data : null,
            'error' => $response->status ? null : $response->error
        ];

        echo json_encode($dato);
        exit;
    }
}