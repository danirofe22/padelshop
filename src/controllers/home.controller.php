<?php 

class HomeController extends Controller{
    function __construct(){
        session_start();
        parent::__construct();
        $this->view->render('home');
    }

    function logout(){
        
        session_unset(); 
        session_destroy();
        echo '<script>document.body.innerHTML = ""</script>';
        $this->view->render('login/login');
    }
}
?>