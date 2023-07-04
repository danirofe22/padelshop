<?php 
    include_once 'src\models\login.php';

    class DetallePerfilController extends Controller{
        public $profileModel;

        function __construct(){
            parent::__construct();
            $this->profileModel = Login::getInstance();
            session_start();
            //TODO
            // $this->loadProfileData($_SESSION['userInfo']['usuario']);
        }

        // function loadProfileData($username){
        //     // Obtener los datos del perfil
        //     $profileData = $this->profileModel->getProfileData($username);
            
        //     // Comprobar si se encontraron los datos del perfil
        //     if ($profileData === null) {
        //         // Redirigir a una página de error o mostrar un mensaje de error
        //         header('Location: http://localhost/padelshop/error');
        //         exit();
        //     } else {
        //         // Pasar los datos del perfil a la vista
        //         $this->view->set_data('profile', $profileData);
        //         echo '<script>document.body.innerHTML = ""</script>';
        //         $this->view->render('perfil/detalle.perfil');
        //     }
        // }
    }
?>