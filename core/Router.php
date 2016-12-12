<?php

class Router
{
    protected $routes = [
        'GET' => [], // routes['GET'][$uri] = $controller
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static;
        require $file; // require route.php , $router->define([ '...' => '...' ]);
        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->routes[$requestType][$uri];
        }
        throw new Exception("No Route Found");
    }
}
