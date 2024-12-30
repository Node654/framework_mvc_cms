<?php

namespace Framework;

class Response
{
    public function setResponseCode(int $code = 200): void
    {
        http_response_code($code);
    }
}