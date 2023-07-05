<?php 
    include_once 'src\models\login.php';
    class LoginController extends Controller{
        public $loginCon;
        public $router;
        public $loginResult;

        public $singup;
        function __construct(){

            parent::__construct();
            
            $this->view->render('login/login');
            $this->loginCon = Login::getInstance();
        }

        function authenticateUser(){
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                echo "<script>console.log('he entrado en metodo login')</script>";
                $loginResult = $this->loginCon->login($_POST['username'], $_POST['password']);
                if ($loginResult['login']) {
                    session_start();
                    $_SESSION['userInfo'] = $this->loginCon->getProfileData($_POST['username']);
                    header('Location: http://localhost/padelshop/home');
                    exit();
                    
                }else {
                    $this->view->set_data('msg', $loginResult['msg']);
                    echo '<script>document.body.innerHTML = ""</script>';
                    $this->view->render('login/login');
                }
            }
        } 
    }
?>