<?php

namespace Framework;

class Request
{
    private string $uri;

    public function __construct(string $uri)
    {
        $this->uri = trim(urldecode($uri), '/');
    }
}