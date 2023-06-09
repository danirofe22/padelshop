<?php
class Router {
    private $routes = [];
    private static $instance;

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Router();
        }
        
        return self::$instance;
    }

    public function add($route, $function) {
        $this->routes[$route] = $function;
    }

    public function run($url) {
        if(array_key_exists($url, $this->routes)) {
            $this->routes[$url]();
            echo 'entro';
        } else {
            echo "404 Not Found". '<br>';
            echo parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) . '<br>';

            foreach (array_keys($this->routes) as $route) {
                echo $route . '<br>';
            };
        }
    }
}
?>