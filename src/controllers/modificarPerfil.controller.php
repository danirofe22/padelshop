<?php 
    include_once 'src\models\login.php';

    class ModificarPerfilController extends Controller {
        private $loginModel;

        public function __construct(){
            parent::__construct();
            session_start();
            $this->loginModel = Login::getInstance();
            $this->loadProfileData();
        }

        public function loadProfileData(){
            $username = $_SESSION['userInfo']['usuario'];
            $userData = $this->loginModel->getProfileData($username);
            
            if ($userData === null) {
                echo "<script>console.log('Error al cargar los datos del perfil')</script>";
            } else {
                $this->view->set_data('user_data', $userData);
                $this->view->render('perfil/modificar.perfil');
            }
        }

        public function updateProfileData(){
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $updateResult = $this->loginModel->editProfile($_POST['nombre'], $_POST['apellidos'], $_POST['username'], $_POST['password'], $_POST['email'], $_POST['telefono']);
                if ($updateResult['edit']) {
                    $this->view->set_data('msg', $updateResult['msg']);
                    echo '<script>document.body.innerHTML = ""</script>';
                    $this->loadProfileData();
                    exit();
                }else {
                    $this->view->set_data('msg', $updateResult['msg']);
                    echo '<script>document.body.innerHTML = ""</script>';
                    $this->loadProfileData();
                }
            }
        }
    }
?>