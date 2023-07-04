<?php
    // header('Location: http://localhost/padelshop/login');
    // exit;

    class IndexController extends Controller{

        function __construct(){
            parent::__construct();
        }

        public function saludar(){
            echo '<p>Se ejecuta un saludo desde el index controller</p>';
        }   
    }
?>