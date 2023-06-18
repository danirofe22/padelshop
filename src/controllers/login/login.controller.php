<?php 
    include_once 'src\models\login.php';
    include_once 'router.php';

    $login = Login::getInstance();
    $router = Router::getInstance();
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $loginResult = $login->login($_POST['username'], $_POST['password']);
        $loginMsg = $loginResult['msg'];
        if ($loginResult['login']) {
            include_once 'src\views\home\home.view.php';
        } else {
            include_once 'src\views\login\login.view.php';
        }
    }
    if ($_SERVER['REQUEST_METHOD'] != 'POST'){
        include_once 'src\views\login\login.view.php';
    }
?>