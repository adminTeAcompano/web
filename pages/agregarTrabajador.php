<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Solo se procesan los datos si el formulario ha sido enviado
    $rut = $_POST["rut"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $profesion = $_POST["profesion"];

    require "../includes/funciones.php";

    // Llamar a la función agregar_pacientes() después de obtener los datos
    agregar_trabajador($rut, $nombre, $apellido, $profesion);
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Trabajador</title>
    <link rel="stylesheet" href="../css/Paciente.css">
</head>
<body>
    <div class="hero">
        <h1 class="titulo">Agregar Trabajador <span></span></h1>
    </div>
    <div class="container">
        <form method="POST"  class="formulario">
            
            <fieldset>
                
                <legend>Datos del Trabajador</legend>
                <label for="rut">Rut:</label>
                <input type="text" name="rut" id="rut" required > <br><br>

                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" required> <br><br>

                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" id="apellido" required> <br><br>

                <label for="fecha_nacimiento">Profesion:</label>
                <input type="text" name="profesion" id="profesion" required> <br><br>


                <input id="enviar" type="submit" name="agregar" value="Agregar" class="btn">
            </fieldset>

        </form>
        <a href="trabajadores.php" class="btn-back">Volver</a>
    </div>
    <footer class="footer">
        <p>&copy; 2025 - Sistema de Gestión</p>
    </footer>
    <script src="js/scripts_agregar.js"></script>
</body>
</html>
