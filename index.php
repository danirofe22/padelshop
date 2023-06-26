<?php 
    include_once 'router.php';
    $router = Router::getInstance();

    $router->add('/padelshop/', function() {
        include_once 'src\controllers\index\index.controller.php';
    });

    $router->add('/padelshop/login', function() {
        include_once 'src/controllers/login/login.controller.php';
    });

    $router->add('/padelshop/home', function() {
        include_once 'src\views\home\home.view.php';
    });
    
    $router->run(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
?>