<?php 

class QaController extends Controller{
    function __construct(){
        session_start();
        parent::__construct();
        $this->view->render('qa');
    }
}
?>