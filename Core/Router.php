<?php 

namespace Core;

class Router {

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

    public function route($url, $method)
    {
        foreach ($this->routes as $route)
        {
            if ($url === $route['url'] && $route['method'] === $method) {
                return require base_path('Http/Controllers/' . $route['controller']);
            }
        }
        $this->abort();
    }
    
    public function abort($code = 404)
    {
        http_response_code($code);
        die();
    }

}