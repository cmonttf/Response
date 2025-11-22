<?php

namespace StdJsonResponse;

/**
 * Representa una respuesta estándar utilizada por la librería para
 * transmitir información estructurada sobre el resultado de una operación.
 *
 * Esta clase funciona como un contenedor tipado que unifica el estado,
 * mensaje, datos y errores asociados a procesos internos, permitiendo
 * generar respuestas consistentes y fácilmente consumibles por capas
 * superiores como controladores o servicios.
 */
class StdResponse
{
    /** @var bool Indica si la operación fue exitosa. */
    public bool $status;

    /** @var string Mensaje descriptivo del resultado de la operación. */
    public string $message;

    /** @var mixed Datos asociados a la operación cuando esta es exitosa. */
    public mixed $data;

    /** @var mixed Información del error en caso de que la operación falle. */
    public mixed $error;

    /**
     * Constructor de la respuesta estándar.
     *
     * @param string $message Mensaje de resultado entregado al consumidor.
     * @param bool   $status  Estado de la operación (true = éxito).
     * @param mixed  $data    Datos entregados cuando la operación es exitosa.
     * @param mixed  $error   Detalle del error cuando la operación falla.
     */
    public function __construct(string $message = '', bool $status = false, mixed $data = null, mixed $error = null)
    {
        $this->status  = $status;
        $this->message = $message;
        $this->data    = $data;
        $this->error   = $error;
    }
}