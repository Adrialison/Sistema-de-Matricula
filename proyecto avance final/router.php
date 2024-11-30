<?php
require_once './controllers/EstudianteController.php';
require_once './controllers/CursoController.php';
// Agrega más controladores según sea necesario.

$controller = $_GET['controller'] ?? 'Estudiante';
$action = $_GET['action'] ?? 'index';

switch ($controller) {
    case 'Estudiante':
        $controller = new EstudianteController();
        break;
    case 'Curso':
        $controller = new CursoController();
        break;
    // Agrega más casos según los controladores.
}

if (method_exists($controller, $action)) {
    $controller->{$action}($_POST ?? null);
} else {
    die("Acción no válida.");
}
?>
