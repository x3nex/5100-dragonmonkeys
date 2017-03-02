<?php

class Router {

    protected $routes = [];

    public static function load($file) ///routes.php
    {
        $routes = new static;

        require $file;

        return $routes;
    }
    public function register($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri) // about/culture
    {
        if(array_key_exists($uri, $this->routes)){
            return $this->routes[$uri];
        }
        throw new Exception('No route found.');

    }
}