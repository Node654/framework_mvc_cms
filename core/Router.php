<?php

namespace Framework;

class Router
{
    public function __construct(
        private Request $request,
        private Response $response,
    ) {}

    public function dispatch()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = Route::routes()[$method]["/{$path}"] ?? null;
        if (! isset($callback)) {
            $this->response->setResponseCode(404);

            return 'Page not found';
        }

        return call_user_func($callback);
    }
}
