<?php

namespace Framework;

class Application
{
    public static Application $app;

    private string $uri;

    private Request $request;

    private Response $response;

    private Router $router;

    private View $view;

    public function __construct()
    {
        self::$app = $this;
        $this->uri = $_SERVER['REQUEST_URI'];
        $this->request = new Request($this->uri);
        $this->response = new Response;
        $this->view = new View(LAYOUT);
        $this->router = new Router($this->request, $this->response);
    }

    public function run(): void
    {
        echo $this->router->dispatch();
    }

    public function getResponse(): Response
    {
        return $this->response;
    }

    public function getView(): View
    {
        return $this->view;
    }
}
