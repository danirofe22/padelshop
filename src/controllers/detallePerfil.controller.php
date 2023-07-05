<?php 
    include_once 'src\models\login.php';

    class DetallePerfilController extends Controller{
        public $profileModel;

        function __construct(){
            parent::__construct();
            $this->profileModel = Login::getInstance();
            session_start();
            $this->loadProfileData($_SESSION['userInfo']['usuario']);
        }

        function loadProfileData($username){
            $profileData = $this->profileModel->getProfileData($username);
            if ($profileData === null) {
                header('Location: http://localhost/padelshop/error');
                exit();
            } else {
                $this->view->set_data('profile', $profileData);
                echo '<script>document.body.innerHTML = ""</script>';
                $this->view->render('perfil/detalle.perfil');
            }
        }
    }
?>