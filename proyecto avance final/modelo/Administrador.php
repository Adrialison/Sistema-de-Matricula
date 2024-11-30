<?php
require_once '../database/conexion.php';

class Administrador {
    private $db;

    public function __construct() {
        $this->db = (new Conexion())->conectar();
    }

    public function obtenerAdministradores() {
        $query = $this->db->prepare("SELECT * FROM administrador");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
