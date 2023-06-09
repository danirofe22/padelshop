<?php 
    require 'src\models\data.base.php';
    
    function obtenerUsuarios(){
        $db = Database::getInstance();
        $result = $db->query("SELECT * FROM usuario");
        while ($row =  $result->fetch_assoc()) {
            echo $row['nombre'] . '<br>';
        }
    }
    
?>