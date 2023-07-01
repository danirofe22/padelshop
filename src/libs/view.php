<?php

class View{
    function __construct(){
    }

    function render($nombre){
        require 'src/views/' . $nombre . '.view.php';
    }
}
?>