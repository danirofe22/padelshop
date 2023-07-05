<?php 
include_once 'src\models\productos.php';

class CatalogoController extends Controller{
    public $productoCon;

    function __construct() {
        session_start();
        parent::__construct();
        $this->productoCon = Producto::getInstance();
        $this->listarProductos();
    }

    function listarProductos() {
        $productosResult = $this->productoCon->obtenerTodos();
        if ($productosResult['success']) {
            $this->view->set_data('productos', $productosResult['data']);
            $this->view->render('catalogo'); 
        } else {
            $this->view->set_data('msg', $productosResult['msg']);
            $this->view->render('catalogo');
        }
    }

    function verDetalleProducto($id) {
        $productData = $this->productoCon->obtenerPorId($id);
        if (isset($productData['error'])) {
            $this->view->set_data('msg', $productData['msg']);
            echo '<script>document.body.innerHTML = ""</script>';
            $this->view->render('error/error');
        } else {
            
            $this->view->set_data('productData', $productData);
            echo '<script>document.body.innerHTML = ""</script>';
            $this->view->render('detalle.producto');
        }
    }

    
}
?>