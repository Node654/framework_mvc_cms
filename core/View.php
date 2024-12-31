<?php

namespace Framework;

class View
{
    public function __construct(
        private string $layout,
        private string $content = '',
    ) {}

    public function render(string $view, array $data = [], string $layout = ''): string
    {
        extract($data);
        $view_file = VIEWS."/$view.php";
        if (file_exists($view_file)) {
            ob_start();
            require_once $view_file;

            return ob_get_clean();
        } else {
            setResponseCode(500);

            return view('errors/500');
        }
    }
}
