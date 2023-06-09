<?php 
    require 'router.php';

    $router = Router::getInstance();

    $router->add('/padelshop/', function() {
        include 'src/views/login/login.php';
    });

    $router->add('/padelshop/login', function() {
        include 'src/views/login/login.php';
    });

    $router->add('/padelshop/home', function() {
        include 'src\views\home\home.php';
    });


    error_log('he entrado en router');
    $router->run(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));