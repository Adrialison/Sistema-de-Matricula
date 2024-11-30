<?php
require_once '../database/conexion.php';

class Estudiante {
    private $db;

    public function __construct() {
        $this->db = (new Conexion())->conectar();
    }

    public function obtenerEstudiantes() {
        $query = $this->db->prepare("SELECT * FROM estudiante");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function agregarEstudiante($nombre, $apellido, $fecha_nacimiento, $correo, $telefono) {
        $query = $this->db->prepare("INSERT INTO estudiante (nombre, apellido, fecha_nacimiento, correo, telefono) VALUES (?, ?, ?, ?, ?)");
        return $query->execute([$nombre, $apellido, $fecha_nacimiento, $correo, $telefono]);
    }

    public function eliminarEstudiante($id_estudiante) {
        $query = $this->db->prepare("DELETE FROM estudiante WHERE id_estudiante = ?");
        return $query->execute([$id_estudiante]);
    }
}
?>
