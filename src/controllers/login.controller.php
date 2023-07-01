<?php 
    include_once 'src\models\login.php';
    include_once 'router.php';


    class LoginController extends Controller{
        public $loginCon;
        public $router;
        public $loginResult;

        function __construct(){
            parent::__construct();
            $this->view->render('login/login');
            $this->loginCon = Login::getInstance();
        }

        function authenticateUser(){
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $loginResult = $this->loginCon->login($_POST['username'], $_POST['password']);
                if ($loginResult['login']) {
                    $this->view->render('home');
                    echo 'home';
                    
                } else {
                    $this->view->render('login/login');
                    echo 'login user fail';
                }
            }
            if ($_SERVER['REQUEST_METHOD'] != 'POST'){
                echo 'fdsafdsafasf';
                $this->view->render('login/login');
            }
        }
    }
?>