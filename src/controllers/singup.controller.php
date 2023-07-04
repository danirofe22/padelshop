<?php
    include_once 'src\models\login.php';
   class SingupController extends Controller{
        private $loginModel;
        function __construct() {
            parent::__construct();
            $this->view->render('login/singup');
            $this->loginModel = Login::getInstance();
        }

        public function registerUser(){
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                echo "<script>console.log('he entrado en metodo register')</script>";
                $registerResult = $this->loginModel->signup(
                    $_POST['nombre'],
                    $_POST['apellidos'], 
                    $_POST['username'], 
                    $_POST['password'], 
                    $_POST['email'], 
                    $_POST['telefono']
                );
                if ($registerResult['signup']) {
                    header('Location: http://localhost/padelshop/login'); // Redirige a la página de inicio de sesión después de un registro exitoso
                    exit();
                } else {
                    $this->view->set_data('msg', $registerResult['msg']);
                    echo '<script>document.body.innerHTML = ""</script>';
                    $this->view->render('register/register'); // Asegúrate de que esta ruta corresponda a tu vista de registro
                }
            }
        }
   } 
?>
