<?php 

class ContactoController extends Controller{
    function __construct(){
        session_start();
        parent::__construct();
        $this->view->render('contacto');
    }
}
?>