<?php

namespace abdullahMuchsin\App;

class Router
{
    public static $routes = [];

    public static function add(string $method, string $path, string $controller, string $function, $middlewares = []): void
    {
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function,
            'middleware' => $middlewares
        ];
    }

    public static function run(): void
    {
        $path = '/';

        if (isset($_SERVER['PATH_INFO'])) {
            $path = $_SERVER['PATH_INFO'];
        }

        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $route) {
            if ($method == $route['method'] && $path['path']) {
                echo "CONTROLLER : {$route['controller']}, FUNCTION : {$route['function']}";
            }
        }

        http_response_code(404);
        echo "CONTROLLER NOT FOUND";
    }
}
