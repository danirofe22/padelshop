<?php 
include_once 'src\models\productos.php';

class CatalogoController extends Controller{
    public $productoCon;

    function __construct() {
        parent::__construct();
        $this->productoCon = Producto::getInstance();
        $this->listarProductos();
        session_start();
    }

    function listarProductos() {
        $productosResult = $this->productoCon->obtenerTodos();
        if ($productosResult['success']) {
            $this->view->set_data('productos', $productosResult['data']);
            $this->view->render('catalogo'); 
        } else {
            $this->view->set_data('msg', $productosResult['msg']);
            $this->view->render('catalogo'); // Asegúrate de tener una vista de error
        }
    }

    function verDetalleProducto($id) {
        $_SESSION['producto'] = $id;
        header('Location: http://localhost/padelshop/detalleproducto');
        exit();
    }

}
?>