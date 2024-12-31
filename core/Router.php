<?php

namespace Framework;

class Router
{
    public function __construct(
        private Request $request,
        private Response $response,
    ) {}

    public function dispatch(): string
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = Route::routes()[$method]["/{$path}"] ?? null;

        if (! isset($callback)) {
            $this->response->setResponseCode(404);

            return view('errors/404');
        }

        if (is_array($callback)) {
            $callback[0] = new $callback[0];
        }

        return call_user_func($callback);
    }
}
