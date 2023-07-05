<?php
include_once 'src\models\producto.php';

class DetalleProductoController extends Controller {
    public $productCon;
    public $productData;

    function __construct() {
        session_start();
        parent::__construct();
        $this->productCon = Producto::getInstance();
    }
}
?>