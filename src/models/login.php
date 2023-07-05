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
        
        
        public function login($username, $password): array{
            $resultado = array(
                'login' => false,
                'msg' => ''
            );
            $this->db->connect();
            $stmt = $this->db->connection->prepare("SELECT * FROM usuario WHERE usuario = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows === 0) {
                $resultado['msg'] = 'Usuario no encontrado';
                return $resultado;
            }
            $user = $result->fetch_assoc();
            if ($password == $user['contrasena']) {
                $resultado['msg'] = 'Login realizado correctamente';
                $resultado['login'] = true;
                return $resultado;
            }
            $resultado['msg'] = 'La contraseña es incorrecta';
            return $resultado;
        }

        public function signup($nombre, $apellidos, $username, $password, $email, $telefono): array {
            $resultado = array(
                'signup' => false,
                'msg' => ''
            );
            $this->db->connect();
            $stmt = $this->db->connection->prepare("SELECT * FROM usuario WHERE usuario = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $resultado['msg'] = 'El nombre de usuario ya está en uso';
                return $resultado;
            }
            $stmt = $this->db->connection->prepare("INSERT INTO usuario (nombre, apellidos, usuario, contrasena, email, telefono) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $nombre, $apellidos, $username, $password, $email, $telefono);
            if ($stmt->execute()) {
                $resultado['signup'] = true;
                $resultado['msg'] = 'Registro realizado correctamente';
            } else {
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