<?php 

namespace app\models;
use PDO;

class Database{
    private $host;
    private $db_name;
    private $username;
    private $rootpass;
    public $conn;
    
    public function __construct() {
        // Configuración para Render (producción) o local (desarrollo)
        if (isset($_ENV['MYSQL_HOST'])) {
            // Render con MySQL externo (PlanetScale, Railway, etc.)
            $this->host = $_ENV['MYSQL_HOST'];
            $this->db_name = $_ENV['MYSQL_DATABASE'] ?? 'db_personas';
            $this->username = $_ENV['MYSQL_USER'];
            $this->rootpass = $_ENV['MYSQL_PASSWORD'];
        } else {
            // Local - configuración Docker
            $this->host = "db";
            $this->db_name = "db_personas";
            $this->username = "root";
            $this->rootpass = "rootpass";
        }
    }

    public function getConnection(){
        $this->conn = null;
        try {
            // Detectar tipo de base de datos
            if (isset($_ENV['DATABASE_URL'])) {
                // PostgreSQL (Render gratuito)
                $this->conn = new PDO($_ENV['DATABASE_URL']);
            } else {
                // MySQL (local)
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name , $this->username, $this->rootpass);
            }
            $this->conn->exec("set names utf8");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (\PDOException $message) {
            echo "Error de conexion de tipo: " . $message->getMessage();
        }
        return $this->conn;
    }
}

?>