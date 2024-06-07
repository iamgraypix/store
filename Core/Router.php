<?php

namespace Core;

class Router
{

    protected $routes = [];

    public function add($url, $controller, $method)
    {
        $this->routes[] = [
            'url' => $url,
            'method' => $method,
            'controller' => $controller
        ];
    }

    public function get($url, $controller)
    {
        $this->add($url, $controller, 'GET');
    }

    public function post($url, $controller)
    {
        $this->add($url, $controller, 'POST');
    }

    public function route($url, $method)
    {
        foreach ($this->routes as $route) {
            if ($url === $route['url'] && $route['method'] === strtoupper($method)) {
                return require base_path('Http/Controllers/' . $route['controller']);
            }
        }
        $this->abort();
    }

    public function previousUrl()
    {
        $this->redirect($_SERVER['HTTP_REFERER']);
    }

    public function redirect($path)
    {
        header("location: {$path}");
        die();
    }


    public function abort($code = 404)
    {
        http_response_code($code);
        die();
    }
}
