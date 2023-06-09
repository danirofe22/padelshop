<?php
class Router {
    private $routes = [];

    public function add($route, $function) {
        $this->routes[$route] = $function;
    }

    public function run($url) {
        if(array_key_exists($url, $this->routes)) {
            $this->routes[$url]();
        } else {
            echo "404 Not Found". '<br>';
            echo parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

            foreach (array_keys($this->routes) as $route) {
                echo $route . '<br>';
            };
        }
    }
}

$router = new Router();

$router->add('/padelshop', function() {
    include 'src/views/login/login.php';
});

$router->add('/padelshop/login', function() {
    include 'src/views/login/login.php';
});

$router->add('/adios', function() {
    echo '¡Adiós, mundo!';
});

$router->run(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

?>