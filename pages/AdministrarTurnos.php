<?php
// Importar las funciones necesarias desde el archivo externo
require "../includes/funciones.php";

// Obtener los datos de los turnos desde la base de datos


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/busqueda_paciente.css"> <!-- Enlace al archivo CSS -->
    <title>Administrar Turnos y Pagos</title>
</head>

<body>
<form method="post" action="AdministrarTurnos.php">
    <fieldset>
        <legend>Administrar Turnos y Pagos</legend>
        <a class="volver_admin" href="../index.php">Volver</a>

        <!-- Contenedor de los botones -->
        <div class="form-buttons">
            <!-- Selector de Mes -->
            <label for="Seleccion_Mes">Mes:</label>
            <select name="Mes" id="Mes">
                <option value="Todos">-- Todo --</option>
                <option value="1">Enero</option>
                <option value="2">Febrero</option>
                <option value="3">Marzo</option>
                <option value="4">Abril</option>
                <option value="5">Mayo</option>
                <option value="6">Junio</option>
                <option value="7">Julio</option>
                <option value="8">Agosto</option>
                <option value="9">Septiembre</option>
                <option value="10">Octubre</option>
                <option value="11">Noviembre</option>
                <option value="12">Diciembre</option>
            </select>

            <label for="Trabajador">Trabajador:</label>
            <select name="Trabajador" id="Trabajador">
                <option value="Todos">-- Todo --</option>
                <?php
                    $trabajadores = mostrar_trabajadores();
                    while ($trabajador = mysqli_fetch_assoc($trabajadores)) {
                ?>
                    <option value='<?php echo $trabajador['rut'];?>'> <?php echo $trabajador['nombre'] . " " . $trabajador['apellido']; ?></option>
                <?php } ?>
            </select>

            <button id="filtrar" type="submit" class="boton">Filtrar</button>
            <a href="agregar_turno.php" class="agregar_turno">Agregar turno</a>
        </div>
    </fieldset>
</form>



<!-- GENERAR ENCABEZADO DE LA TABLA -->

<table> 
    <thead>
        <tr>
        <th>ID</th>
        <th>rut trabajador</th>
        <th>rut paciente</th>
        <th>fecha turno</th>
        <th>horas</th>
        <th>pago_hora</th>
</tr>
    <tbody>
       
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Horas=0;
    $pago_hora=0;
    $sueldo_turn=0;
    $sueldo_final=0;
  if($_POST['Mes']!="Todos" && $_POST['Trabajador']!="Todos"){ 
    

    // Capturar valores del formulario
    $mesSeleccionado = $_POST['Mes'];

    $rutSeleccionado = $_POST['Trabajador'];

    $consulta = filtrarPorMesNombre($mesSeleccionado,$rutSeleccionado);

 
    ?>
 
    <?php
    $consulta =filtrarPorMesNombre($mesSeleccionado,$rutSeleccionado);

       
        while ($turno = mysqli_fetch_assoc($consulta)) {
            $nombre_trabajador=mostrar_nombre_mouse($turno['rut_trabajador']);
            $nombre_paciente = mostrar_nombre_mouse1($turno['rut_paciente']);
            echo "<tr>";
            echo "<td>" . ($turno['id']) . "</td>";
            echo "<td>" . ($nombre_trabajador) . "</td>";
            echo "<td>" . ($nombre_paciente) . "</td>";
            echo "<td>" . ($turno['fecha_turno']) . "</td>";
            echo "<td>" . ($turno['horas_trabajadas']) . "</td>";
            echo "<td>" . ($turno['pago_hora']) . "</td>";
            echo "</tr>";
            $Horas=$turno['horas_trabajadas'] ;
            $pago_hora=$turno['pago_hora'];
            $sueldo_turno=$Horas*$pago_hora;
            $sueldo_final=$sueldo_final+$sueldo_turno;
            
        }
        echo "<p>Sueldo Mensual: <strong> $ $sueldo_final</strong></p>";
    
    
     } 

     else if($_POST['Mes']!="Todos" && $_POST['Trabajador']=="Todos"){
        $mes=$_POST['Mes'];
        $consulta=filtrarPorMes($mes);
        while ($turno = mysqli_fetch_assoc($consulta)) {
            $nombre_trabajador=mostrar_nombre_mouse($turno['rut_trabajador']);
            $nombre_paciente = mostrar_nombre_mouse1($turno['rut_paciente']);
            echo "<tr>";
            echo "<td>" . ($turno['id']) . "</td>";
            echo "<td>" . ($nombre_trabajador) . "</td>";
            echo "<td>" . ($nombre_paciente) . "</td>";
            echo "<td>" . ($turno['fecha_turno']) . "</td>";
            echo "<td>" . ($turno['horas_trabajadas']) . "</td>";
            echo "<td>" . ($turno['pago_hora']) . "</td>";
            echo "</tr>";
        }

     }
     else if($_POST['Mes']=="Todos" && $_POST['Trabajador']!="Todos"){
        $rut=$_POST['Trabajador'];
        $consulta=filtrarPorTrabajador($rut);
        while ($turno = mysqli_fetch_assoc($consulta)) {
            $nombre_trabajador=mostrar_nombre_mouse($turno['rut_trabajador']);
            $nombre_paciente = mostrar_nombre_mouse1($turno['rut_paciente']);
            echo "<tr>";
            echo "<td>" . ($turno['id']) . "</td>";
            echo "<td>" . ($nombre_trabajador) . "</td>";
            echo "<td>" . ($nombre_paciente) . "</td>";
            echo "<td>" . ($turno['fecha_turno']) . "</td>";
            echo "<td>" . ($turno['horas_trabajadas']) . "</td>";
            echo "<td>" . ($turno['pago_hora']) . "</td>";
            echo "</tr>";
        }

     }
     else if ( $_POST['Mes']=="Todos" && $_POST['Trabajador']=="Todos"){
        $consulta=administracion_de_turnos();
        while ($turno = mysqli_fetch_assoc($consulta)) {
            $nombre_trabajador=mostrar_nombre_mouse($turno['rut_trabajador']);
            $nombre_paciente = mostrar_nombre_mouse1($turno['rut_paciente']);
    
            echo "<tr>";
            echo "<td>" . ($turno['id']) . "</td>";
            echo "<td>" . ($nombre_trabajador) . "</td>";
            echo "<td>" . ($nombre_paciente) . "</td>";
            echo "<td>" . ($turno['fecha_turno']) . "</td>";
            echo "<td>" . ($turno['horas_trabajadas']) . "</td>";
            echo "<td>" . ($turno['pago_hora']) . "</td>";
            echo "</tr>";
        }  
    }
 
     

    
}

 else if ( $_SERVER['REQUEST_METHOD'] != 'POST'){
    $consulta=administracion_de_turnos();
    while ($turno = mysqli_fetch_assoc($consulta)) {
        $nombre_trabajador=mostrar_nombre_mouse($turno['rut_trabajador']);
        $nombre_paciente = mostrar_nombre_mouse1($turno['rut_paciente']);

        echo "<tr>";
        echo "<td>" . ($turno['id']) . "</td>";
        echo "<td>" . ($nombre_trabajador) . "</td>";
        echo "<td>" . ($nombre_paciente) . "</td>";
        echo "<td>" . ($turno['fecha_turno']) . "</td>";
        echo "<td>" . ($turno['horas_trabajadas']) . "</td>";
        echo "<td>" . ($turno['pago_hora']) . "</td>";
        echo "</tr>";
    }  
}

?>

                </tbody>
            </table> 
        </fieldset>
    </form>
</body>

</html>
