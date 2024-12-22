<?php

namespace Framework;

class Application
{
    private string $uri;
    private Request $request;
    private Response $response;
    private Router $router;

    public function __construct(array $routes = [])
    {
        $this->uri = $_SERVER['REQUEST_URI'];
        $this->request = new Request($this->uri);
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }
}