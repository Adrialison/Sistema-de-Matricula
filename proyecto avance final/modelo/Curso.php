<?php
require_once '../database/conexion.php';

class Curso {
    private $db;

    public function __construct() {
        $this->db = (new Conexion())->conectar();
    }

    public function obtenerCursos() {
        $query = $this->db->prepare("SELECT * FROM curso");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
