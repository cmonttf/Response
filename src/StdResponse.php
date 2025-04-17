<?php

namespace StdJsonResponse;

class StdResponse
{
    public bool $status;
    public string $message;
    public mixed $data;
    public mixed $error;

    public function __construct(string $message = '', bool $status = false, mixed $data = null, mixed $error = null)
    {
        $this->status = $status;
        $this->message = $message;
        $this->data = $data;
        $this->error = $error;
    }
}
