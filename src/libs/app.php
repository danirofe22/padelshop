<?php
    class App{
        function __construct(){
            $url = isset($_GET['url']) ? $_GET['url'] : false ;
            $url = rtrim($url, '/');
            $url = explode('/', $url);

            if(empty($_GET['url'])){
                $urlControlador = 'src/controllers/login.controller.php';
                require_once $urlControlador;
                $controller = new LoginController;
                return;
            }
            $urlControlador = 'src/controllers/' . $url[0] . '.controller.php';            
            require_once $urlControlador;
            $urlControlador = $url[0] . 'Controller';
       
            $controller = new $urlControlador;


            $length = count($url);
            if($length > 2){
                $params = array_slice($url, 2);
                call_user_func_array([$controller, $url[1]], $params);
            } else if(isset($url[1])){
                $controller->{$url[1]}();
            }
                
        }
    }
?>