<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Solo se procesan los datos si el formulario ha sido enviado
    $rut = $_POST["rut"];

    require "../includes/funciones.php";

    // Llamar a la función agregar_pacientes() después de obtener los datos
    eliminar_trabajador($rut);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Paciente</title>
    <link rel="stylesheet" href="../css/eliminar.css">
</head>
<body>

    <div class="hero">
        <h1 class="titulo">Gestión de <span>Trabajadores</span></h1>
    </div>

    <div class="logistica">
        <div class="eliminar">
            <h2>Eliminar Paciente</h2>
            <form method="POST">

                <fieldset>
                    
                    <label for="rut">Rut:</label>
                    <input type="int" id="rut" name="rut" placeholder="Ingrese el RUT" required>
                    <button type="submit" name="eliminar">Eliminar</button>
                </fieldset>
            </form>
            <a href="trabajadores.php">Volver</a>
        </div>
    </div>

    
    <footer class="footer">
        <p>&copy; 2025 - Sistema de Gestión</p>
    </footer>


</body>
</html>
