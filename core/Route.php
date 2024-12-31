<?php

namespace Framework;

class Route
{
    private static array $routes = [];

    public static function get(string $uri, callable|array $callback): void
    {
        static::$routes['GET'][self::addLeadingSlash($uri)] = $callback;
    }

    public static function post(string $uri, callable|array $callback): void
    {
        static::$routes['POST'][self::addLeadingSlash($uri)] = $callback;
    }

    public static function routes(): array
    {
        return static::$routes;
    }

    private static function addLeadingSlash(string $uri): string
    {
        return '/'.trim($uri, '/');
    }
}
