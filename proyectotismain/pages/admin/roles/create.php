<?php
include("middleware/auth.php");
include("database/connection.php");

if ($_SESSION['id_rol'] !== '1') {
    // El usuario no tiene permisos para acceder a esta página, redirigir o mostrar un mensaje de error
    header("Location: index.php");
    exit();
}

$query_max_id = "SELECT MAX(idRol) AS max_id FROM roles";
$result_max_id = mysqli_query($connection, $query_max_id);

if ($row = mysqli_fetch_assoc($result_max_id)) {
    $nuevo_id_rol = $row['max_id'] + 1;
} else {
    // Si no hay registros en la tabla, puedes iniciar con idRol igual a 1
    $nuevo_id_rol = 1;
}

if (isset($_POST['submit'])) {
    $descripcion = $_POST['descripcion']; 

    // Consulta para insertar un nuevo rol en la base de datos
    $query_insert = "INSERT INTO roles (idRol, nombreRol) VALUES ($nuevo_id_rol, '$descripcion')";
   

    if (mysqli_query($connection, $query_insert)) {
        // Redirige o muestra un mensaje de éxito
        header("Location: index.php?p=admin/roles/index");
        exit();
    } else {
        // Maneja errores si la consulta falla
        echo "Error en la consulta: " . mysqli_error($connection);
    }
}
?>
   <div class="container-fluid border-bottom border-top bg-body-tertiary">
            <div class=" p-5 rounded text-center">
            <h2 class="fw-normal">Registro de Nuevo Rol</h1>
            </div>
        </div>
<div class="container mt-5">
    <form method="post">
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <input type="text" name="descripcion" class="form-control" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Guardar</button>
    </form>
    <a href="index.php?p=admin/roles/index">Volver a la lista de roles</a>
</div>
