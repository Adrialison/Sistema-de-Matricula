<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Estudiantes</title>
</head>
<body>
    <h1>Lista de Estudiantes</h1>
    <a href="crear.php">Agregar Estudiante</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de Nacimiento0</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estudiantes as $estudiante): ?>
                <tr>
                    <td><?= $estudiante['id_estudiante'] ?></td>
                    <td><?= $estudiante['nombre'] ?></td>
                    <td><?= $estudiante['apellido'] ?></td>
                    <td><?= $estudiante['fecha_nacimiento'] ?></td>
                    <td><?= $estudiante['correo'] ?></td>
                    <td><?= $estudiante['telefono'] ?></td>
                    <td>
                        <a href="eliminar.php?id=<?= $estudiante['id_estudiante'] ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
