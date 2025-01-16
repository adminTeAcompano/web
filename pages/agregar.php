<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Solo se procesan los datos si el formulario ha sido enviado
    $rut = $_POST["rut"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];

    require "../includes/funciones.php";

    // Llamar a la función agregar_pacientes() después de obtener los datos
    agregar_pacientes($rut, $nombre, $apellido, $fecha_nacimiento);
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Paciente</title>
    <link rel="stylesheet" href="../css/Paciente.css">
</head>
<body>
    <div class="hero">
        <h1 class="titulo">Agregar Paciente <span></span></h1>
    </div>
    <div class="container">
        <form method="POST"  class="formulario">
            
            <fieldset>
                
                <legend>Datos del Paciente</legend>
                <label for="rut">Rut:</label>
                <input type="text" name="rut" id="rut" required > <br><br>

                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" required> <br><br>

                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" id="apellido" required> <br><br>

                <label for="fecha_nacimiento">Fecha de nacimiento:</label>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" required> <br><br>


                <input id="enviar" type="submit" name="agregar" value="Agregar" class="btn">
            </fieldset>

        </form>
        <a href="pacientes.php" class="btn-back">Volver</a>
    </div>
    <footer class="footer">
        <p>&copy; 2025 - Sistema de Gestión</p>
    </footer>
    <script src="js/scripts_agregar.js"></script>
</body>
</html>
