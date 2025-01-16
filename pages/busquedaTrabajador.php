<?php
// Importar las funciones necesarias desde el archivo externo
require "../includes/funciones.php";

// Obtener los datos de los pacientes desde la base de datos
$consulta = obtener_trabajador();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/busqueda_paciente.css"> <!-- Enlace al archivo CSS -->
    <title>Búsqueda de Trabajadores</title>
</head>

<body>
    <!-- Formulario para buscar pacientes -->
    <form">
        <fieldset>
            <legend>Buscar Trabajadores</legend>
            

            <!-- Botón Volver -->
            <a href="trabajadores.php" class="boton volver">Volver</a>


            <!-- Tabla para mostrar los datos de los pacientes -->
            <table>
                <!-- Encabezado de la tabla -->
                <thead>
                    <tr>
                        <th>RUT</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>profesion</th>
                    </tr>
                </thead>

                <!-- Cuerpo de la tabla -->
                <tbody id="tabla-Trabajadores">
                    <?php 
                    // Iterar sobre los pacientes y generar filas en la tabla
                    while ($trabajadores = mysqli_fetch_assoc($consulta)) { 
                        echo "<tr>"; //<tr> es una etiqueta HTML que crea una fila en una tabla.
                        echo "<td>" .($trabajadores['rut']) . "</td>"; //<td> es una etiqueta HTML que define una celda dentro de una fila de una tabla
                        echo "<td>" . ($trabajadores['nombre']) . "</td>";
                        echo "<td>" . ($trabajadores['apellido']) . "</td>";
                        echo "<td>" . ($trabajadores['profesion']) . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </fieldset>
    </form>
</body>

</html>
