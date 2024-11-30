<?php
require_once '../models/Estudiante.php';

class EstudianteController {
    private $model;

    public function __construct() {
        $this->model = new Estudiante();
    }

    public function index() {
        $estudiantes = $this->model->obtenerEstudiantes();
        require_once '../views/estudiante/index.php';
    }

    public function crear($data) {
        $this->model->agregarEstudiante($data['nombre'], $data['apellido'], $data['fecha_nacimiento'], $data['correo'], $data['telefono']);
        header("Location: ../views/estudiante/index.php");
    }

    public function eliminar($id_estudiante) {
        $this->model->eliminarEstudiante($id_estudiante);
        header("Location: ../views/estudiante/index.php");
    }
}
?>
