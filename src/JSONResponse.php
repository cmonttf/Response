<?php

namespace StdJsonResponse;

/**
 * Clase responsable de unificar y estandarizar las respuestas JSON
 * enviadas desde la aplicación. Su propósito es encapsular la lógica
 * de estructura, formateo y salida del response, evitando duplicación
 * de código y asegurando consistencia entre distintas capas.
 */
class JSONResponse
{
    /**
     * Envía una respuesta JSON estandarizada basada en el contenido de un
     * objeto StdResponse. Construye el arreglo final según si la respuesta
     * es exitosa o contiene errores, codifica el resultado en JSON y lo
     * imprime directamente, finalizando inmediatamente la ejecución.
     *
     * @param StdResponse $response Objeto que contiene el estado,
     *                              mensaje, datos y posibles errores
     *                              de la operación ejecutada.
     *
     * @return void
     */
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