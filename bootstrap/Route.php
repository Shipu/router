<?php

class Route
{
    protected static $routes;

    public static function get(...$args)
    {
        self::$routes[] = $args;
    }

    public static function callController($string)
    {
        $controllerString = explode('@', $string);
        require_once __DIR__.'/../app/Http/Controllers/'.$controllerString[0].'.php';
        $controller = '\App\Http\Controllers\\'.$controllerString[0];
        $method = $controllerString[1];

        $controller = new $controller();
        $controller->{$method}();
    }

    public static function process($args)
    {
        foreach (self::$routes as $route) {
            if($route[0] == $args[0]) {
                if($route[1] instanceof Closure) {
                    return $route[1]();
                }
                self::callController($route[1]);
                return;
            }
        }

        dd('Not Found');
    }

    public static function __callStatic($method, $args)
    {
        dd("Method Not Found");
    }
}