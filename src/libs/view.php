<?php

class View{

    public $data = array();
    function __construct(){
    }

    function render($nombre){
        require 'src/views/' . $nombre . '.view.php';
    }

    function set_data($key, $value){
        $this->data[$key] = $value;
    }
}
?>