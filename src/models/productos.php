<?php 
include_once 'src\models\data.base.php';

class Producto{
    private static $instance;
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Producto();
        }
        return self::$instance;
    }

    public function obtenerTodos(): array{
        $this->db->connect();
        $stmt = $this->db->connection->prepare("SELECT * FROM productos");
        if (!$stmt->execute()) {
            return ['success' => false, 'msg' => $stmt->error];
        }
        $result = $stmt->get_result();
        $productos = $result->fetch_all(MYSQLI_ASSOC);
        return ['success' => true, 'data' => $productos];
    }

    public function obtenerPorId($id): array{
        $this->db->connect();
        $stmt = $this->db->connection->prepare("SELECT * FROM productos WHERE id = ?");
        $stmt->bind_param("i", $id);
        if (!$stmt->execute()) {
            return ['success' => false, 'msg' => $stmt->error];
        }
        $result = $stmt->get_result();
        $producto = $result->fetch_assoc();
        return ['success' => true, 'data' => $producto];
    }

    public function agregar($nombre, $descripcion, $imagen, $stock, $categoria): array{
        $this->db->connect();
        $stmt = $this->db->connection->prepare("INSERT INTO productos (nombre, descripcion, imagen, stock, categoria) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssii", $nombre, $descripcion, $imagen, $stock, $categoria);
        if (!$stmt->execute()) {
            return ['success' => false, 'msg' => $stmt->error];
        }
        return ['success' => true];
    }

    public function actualizar($id, $nombre, $descripcion, $imagen, $stock, $categoria): array{
        $this->db->connect();
        $stmt = $this->db->connection->prepare("UPDATE productos SET nombre=?, descripcion=?, imagen=?, stock=?, categoria=? WHERE id=?");
        $stmt->bind_param("sssiii", $nombre, $descripcion, $imagen, $stock, $categoria, $id);
        if (!$stmt->execute()) {
            return ['success' => false, 'msg' => $stmt->error];
        }
        return ['success' => true];
    }

    public function eliminar($id): array{
        $this->db->connect();
        $stmt = $this->db->connection->prepare("DELETE FROM productos WHERE id=?");
        $stmt->bind_param("i", $id);
        if (!$stmt->execute()) {
            return ['success' => false, 'msg' => $stmt->error];
        }
        return ['success' => true];
    }
}
?>