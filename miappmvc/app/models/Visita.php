<?php 
namespace app\models;
use PDO;

class Visita
{
    public $nombre;
    public $email;
    public $telefono;
    public $edad;
    public $ocupacion;
    public $comentario;

    private $conn;
    private $table = 'tbl_personas';

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // READ - Obtener todas las visitas
    public function obtener()
    {
        $statement = $this->conn->query("SELECT * FROM {$this->table} ORDER BY id DESC"); 
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    // CREATE - Crear nueva visita
    public function create()
    {
        $sql = "INSERT INTO {$this->table} (nombre, email, telefono, edad, ocupacion, comentario, fecha_visita) VALUES (?, ?, ?, ?, ?, ?, NOW())";
        $statement = $this->conn->prepare($sql);
        return $statement->execute([
            $this->nombre,
            $this->email, 
            $this->telefono,
            $this->edad,
            $this->ocupacion,
            $this->comentario
        ]);
    }

    // Contar total de visitas
    public function contarVisitas()
    {
        $statement = $this->conn->query("SELECT COUNT(*) as total FROM {$this->table}");
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result['total'];
    }
}

?>