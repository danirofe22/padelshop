<?php
include_once 'src\models\producto.php';

class DetalleProductoController extends Controller {
    public $productCon;
    public $productData;

    function __construct() {
        echo "<script>console.log('he entrado en metodo contructor de detalle producto')</script>";
        session_start();
        parent::__construct();
        $this->productCon = Producto::getInstance();
    }
}
?>