<?php
class Conexion {
    private $host = "localhost";
    private $db = "sistema_matricula";
    private $user = "root"; // Cambiar si es necesario
    private $pass = ""; // Cambiar si es necesario
    private $charset = "utf8mb4";
    private $pdo;

    public function conectar() {
        try {
            $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->db};charset={$this->charset}", $this->user, $this->pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->pdo;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
}
?>
