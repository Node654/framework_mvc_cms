<?php

namespace Framework;

class Route
{
    private static array $routes = [];

    public static function get(string $uri, callable $callback): void
    {
        static::$routes['GET'][$uri] = $callback;
    }

    public static function post(string $uri, callable $callback): void
    {
        static::$routes['POST'][$uri] = $callback;
    }

    public static function routes(): array
    {
        return static::$routes;
    }
}