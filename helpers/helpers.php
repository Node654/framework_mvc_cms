<?php

use Framework\Application;
use Framework\View;

function app(): Application
{
    return Application::$app;
}

function setResponseCode(int $code = 200): void
{
    app()->getResponse()->setResponseCode($code);
}

function view(string $view, array $data = [], string $layout = ''): string|View
{
    if ($view) {
        return app()->getView()->render($view, $data, $layout);
    }

    return app()->getView();
}
