<?php 

class HomeController extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render('home');
    }
}

?>