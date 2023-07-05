<?php 
include_once 'src\models\productos.php';

class HomeController extends Controller{

    public $productoCon;

    function __construct(){
        session_start();
        parent::__construct();
        $this->productoCon = Producto::getInstance();
        $this->getMasVendidos();
        $this->getTopOfertas();
        $this->view->render('home');
    }

    function logout(){
        session_unset(); 
        session_destroy();
        echo '<script>document.body.innerHTML = ""</script>';
        $this->view->render('login/login');
    }

    function getMasVendidos() {
        $productosTopVentas = $this->productoCon->obtenerMasVendidos();
        if ($productosTopVentas['success']) {
            $this->view->set_data('productosTopVentas', $productosTopVentas['data']);
        } else {
            $this->view->set_data('msg', $productosTopVentas['msg']);
        }
    }

    function getTopOfertas() {
        $productosTopOfertas = $this->productoCon->obtenerMejoresOfertas();
        if ($productosTopOfertas['success']) {
            $this->view->set_data('productosTopOfertas', $productosTopOfertas['data']);
        } else {
            $this->view->set_data('msg', $productosTopOfertas['msg']);
        }
    }
}
?>