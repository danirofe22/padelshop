<?php
class Database {
    private $host = '127.0.0.1'; // Cambia esto por tu host
    private $user = 'root'; // Cambia esto por tu usuario
    private $pass = ''; // Cambia esto por tu contraseña
    private $db   = 'padel_shop'; // Cambia esto por tu base de datos

    public $connection;
    private static $instance;

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function connect() {
        if (!isset($this->connection)) {
            $this->connection = new mysqli($this->host, $this->user, $this->pass, $this->db);

            if ($this->connection->connect_error) {
                return false;
            }
        }
        return $this->connection;
    }

    public function disconnect() {
        if (isset($this->connection)) {
            $this->connection->close();
            unset($this->connection);
        }
    }

    public function query($sql) {
        $connection = $this->connect();
        if (!$connection) {
        }
        $result = $connection->query($sql);
        $this->disconnect();
        if(!$result){
            return false;
        }
        return $result;
    }
}
?>