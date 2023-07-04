<?php
include_once 'src\models\producto.php';

class DetalleProductoController extends Controller {
    public $productCon;
    public $productData;

    function __construct() {
        parent::__construct();
        $this->productCon = Producto::getInstance();
        session_start();
    }

    function getProductDetails() {
        
        $productData = $this->productCon->obtenerPorId();
        if (isset($productData['error'])) {
            // Si hay un error, muestra el mensaje de error y redirige a una página de error
            $this->view->set_data('msg', $productData['msg']);
            echo '<script>document.body.innerHTML = ""</script>';
            $this->view->render('error/error');
        } else {
            // Si no hay errores, pasa los detalles del producto a la vista y muestra la página de detalles del producto
            $this->view->set_data('productData', $productData);
            $this->view->render('producto/detalle');
        }
    }
}
?>