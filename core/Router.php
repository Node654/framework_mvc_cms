<?php

namespace Framework;

class Router
{
    public function __construct(
        private Request $request,
        private Response $response,
    )
    {
    }
}