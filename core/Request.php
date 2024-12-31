<?php

namespace Framework;

class Request
{
    private string $uri;

    public function __construct(string $uri)
    {
        $this->uri = trim(urldecode($uri), '/');
    }

    public function getPath(): string
    {
        return $this->removeQueryString();
    }

    public function getMethod(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function removeQueryString(): string
    {
        return str_starts_with($this->uri, '?') ? '' : strtok($this->uri, '?');
    }

    public function get(string $key, $default = null): string
    {
        return $_GET[$key] ?? $default;
    }
}
