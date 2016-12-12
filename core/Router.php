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
        require $file; // require route.php , $router->get('...', ...@...);
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
            // return $this->routes[$requestType][$uri]; // 之前是 controllers/index.php之類的東東
            // $this->routes[$requestType][$uri]; // 現在是 PagesController@home
            return $this->callAction(
                // ... 傳進去的參數自動對上
                ...explode('@', $this->routes[$requestType][$uri]) // array: A[0]=PagesController, A[1]=home
            );
        }
        throw new Exception("No Route Found");
    }

    protected function callAction($controllerName, $action)
    {
        $controller = new $controllerName;

        if (! method_exists($controller, $action)) {
            throw new Exception(
                "{$controller} does not respond to the {$action} action."
            );
        }
        return $controller->$action();
    }
}
