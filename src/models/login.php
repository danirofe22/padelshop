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
        public function login($username, $password): array{
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
                
            }
            
            //Redireccion a login con mensaje de error
            $resultado['msg'] = 'La contraseña es incorrecta';
            return $resultado;
            
        }

        public function signup($nombre, $apellidos, $username, $password, $email, $telefono): array {
            $resultado = array(
                'signup' => false,
                'msg' => ''
            );
            // Conexión a la base de datos
            $this->db->connect();
            // Primero verifica si el nombre de usuario ya está en uso
            $stmt = $this->db->connection->prepare("SELECT * FROM usuario WHERE usuario = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();
            // Si el nombre de usuario ya está en uso, devuelve un error
            if ($result->num_rows > 0) {
                $resultado['msg'] = 'El nombre de usuario ya está en uso';
                return $resultado;
            }
            // Declaración y ejecución de la consulta con parámetros para insertar el nuevo usuario
            $stmt = $this->db->connection->prepare("INSERT INTO usuario (nombre, apellidos, usuario, contrasena, email, telefono) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $nombre, $apellidos, $username, $password, $email, $telefono);
            if ($stmt->execute()) {
                // Si el registro fue exitoso, configura 'signup' a true y establece un mensaje de éxito
                $resultado['signup'] = true;
                $resultado['msg'] = 'Registro realizado correctamente';
            } else {
                // Si algo salió mal, configura 'signup' a false y establece un mensaje de error
                $resultado['msg'] = 'Hubo un problema al intentar registrarse. Por favor, inténtalo de nuevo más tarde';
            }
            return $resultado;
        }

        public function getProfileData($username) {
            $this->db->connect();
            $stmt = $this->db->connection->prepare("SELECT * FROM usuario WHERE usuario = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();
        
            if ($result->num_rows === 0) {
                return null;
            }
            return $result->fetch_assoc();
        }

        public function editProfile($nombre, $apellidos, $username, $password, $email, $telefono): array {
            $resultado = array(
                'edit' => false,
                'msg' => ''
            );
            $this->db->connect();
            $stmt = $this->db->connection->prepare("UPDATE usuario SET nombre = ?, apellidos = ?, contrasena = ?, email = ?, telefono = ? WHERE usuario = ?");
            $stmt->bind_param("ssssss", $nombre, $apellidos, $password, $email, $telefono, $username);
            if ($stmt->execute()) {
                $resultado['edit'] = true;
                $resultado['msg'] = 'Perfil actualizado correctamente';
            } else {
                $resultado['msg'] = 'Hubo un problema al intentar actualizar su perfil. Por favor, inténtalo de nuevo más tarde';
            }
            return $resultado;
        }
    }
    ?>