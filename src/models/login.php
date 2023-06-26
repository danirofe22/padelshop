<?php 
    include_once 'src\models\data.base.php';
    class Login{
        private static $instance;
        private $db;
    
        public function __construct() {
            $this->db = Database::getInstance();
            
        }
        public static function getInstance() {
            if (self::$instance === null) {
                self::$instance = new Login();
            }
            return self::$instance;
        }
        
        //Parametros string usuario y string contraseña
        //Devuelve un objeto con string msg y bool de exito en el login
        public function login($username, $password) {
            $resultado = array(
                'login' => false,
                'msg' => ''
            );
            //Conexion a la base de datos
            $this->db->connect();
            //Declaracion y ejecucion de la query con parametros
            $stmt = $this->db->connection->prepare("SELECT * FROM usuario WHERE usuario = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();
            //Comprobar si se obtienen resultados
            if ($result->num_rows === 0) {
                //Devuelve false y mensaje de error
                $resultado['msg'] = 'Usuario no encontrado';
                return $resultado;
            }
            //Transformar los resultados a un array asociativo
            $user = $result->fetch_assoc();
            //Comprobar que la contraseña sea correcta
            if ($password == $user['contrasena']) {
                //Redireccion a la home
                $resultado['msg'] = 'Login realizado correctamente';
                $resultado['login'] = true;
                return $resultado;
                
            } else {
                //Redireccion a login con mensaje de error
                $resultado['msg'] = 'La contraseña es incorrecta';
                return $resultado;
            }
        }
    }
    ?>