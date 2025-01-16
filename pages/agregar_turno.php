<?php
// Comprobar si el formulario fue enviado usando el método POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener y sanitizar los datos del formulario para evitar inyecciones
    $rut_trabajador = htmlspecialchars(trim($_POST["rut_trabajador"]));
    $rut_paciente = htmlspecialchars(trim($_POST["rut_paciente"]));
    $fecha_turno = htmlspecialchars(trim($_POST["fecha_turno"]));
    $horas_trabajadas = (float) htmlspecialchars(trim($_POST["horas"])); // Convertir a número flotante
    $pago_hora = (float) htmlspecialchars(trim($_POST["pago_hora"])); // Convertir a número flotante

    // Incluir funciones externas
    require_once "../includes/funciones.php";

    // Llamar a la función agregar_turno para insertar los datos en la base de datos
    agregar_turno($rut_trabajador, $rut_paciente, $fecha_turno, $horas_trabajadas, $pago_hora);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Turno</title>
    <!-- Enlace al archivo CSS externo -->
    <link rel="stylesheet" href="../css/Paciente.css">
</head>
<body>
    <!-- Encabezado de la página -->
    <div class="hero">
        <h1 class="titulo">Agregar Turno</h1>
    </div>

    <!-- Contenedor principal -->
    <div class="container">
        <!-- Formulario para agregar un turno -->
        <form method="POST" class="formulario">
            <fieldset>
                <legend>Datos del turno</legend>

                <!-- Campo para el RUT del trabajador -->
                <label for="rut_trabajador">Rut del trabajador:</label>
                <input type="text" name="rut_trabajador" id="rut_trabajador" required> <br><br>

                <!-- Campo para el RUT del paciente -->
                <label for="rut_paciente">Rut del paciente:</label>
                <input type="text" name="rut_paciente" id="rut_paciente" required> <br><br>

                <!-- Campo para la fecha del turno -->
                <label for="fecha_turno">Fecha del turno:</label>
                <input type="date" name="fecha_turno" id="fecha_turno" required> <br><br>

                <!-- Campo para las horas trabajadas -->
                <label for="horas">Horas trabajadas:</label>
                <input type="number" step="0.1" name="horas" id="horas" required> <br><br>

                <!-- Campo para el pago por hora -->
                <label for="pago_hora">Pago por hora:</label>
                <input type="number" step="0.01" name="pago_hora" id="pago_hora" required> <br><br>

                <!-- Botón para enviar el formulario -->
                <input id="enviar" type="submit" name="agregar" value="Agregar" class="btn">
            </fieldset>
        </form>

        <!-- Botón para volver a la página anterior -->
        <a href="pacientes.php" class="btn-back">Volver</a>
    </div>

    <!-- Pie de página -->
    <footer class="footer">
        <p>&copy; 2025 - Sistema de Gestión</p>
    </footer>

    <!-- Archivo de JavaScript externo -->
    <script src="../js/scripts_agregar.js"></script>
</body>
</html>
