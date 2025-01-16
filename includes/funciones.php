<?php
////////////////PACIENTES//////////////////////////////////////


function obtener_pacientes(){
  try {
     //importar credenciales
     require "database.php";

     //consulta a SQL
      $sql= "SELECT rut, nombre, apellido, Fecha_nacimiento FROM pacientes";
     //realizar la consulta
      $consulta = mysqli_query($db,$sql);

      return $consulta;

  } catch (\Throwable $th) {
    var_dump($th);
  }
 
  
}


function  agregar_pacientes($rut, $nombre, $apellido, $fecha_nacimiento){

       try {
        //importar credenciales
        require "database.php";

     //consulta a SQL
      $sql= "INSERT INTO pacientes(rut,nombre,apellido,Fecha_nacimiento) VALUES('$rut','$nombre','$apellido','$fecha_nacimiento')";
     //realizar la consulta
      $consulta = mysqli_query($db,$sql);
      $resultado=mysqli_query($db,$consulta);
     

       } catch (\Throwable $th) {
        //throw $th;
       }

}

function eliminar_paciente($rut){
  try {
    //importar credenciales
    require "database.php";

    //consulta a SQL
    $sql = "DELETE FROM pacientes WHERE rut = '$rut'";
    //realizar la consulta
     $consulta = mysqli_query($db,$sql);
    

     

 } catch (\Throwable $th) {
   var_dump($th);
 }
  
}

////////TRABAJADORES//////////////////////

function obtener_trabajador(){
  try {
     //importar credenciales
     require "database.php";

     //consulta a SQL
      $sql= "SELECT rut, nombre, apellido, profesion FROM trabajadores";
     //realizar la consulta
      $consulta = mysqli_query($db,$sql);

      return $consulta;

  } catch (\Throwable $th) {
    var_dump($th);
  }

}

function  agregar_trabajador($rut, $nombre, $apellido, $profesion){

       try {
        //importar credenciales
        require "database.php";

     //consulta a SQL
      $sql= "INSERT INTO trabajadores(rut,nombre,apellido,profesion) VALUES('$rut','$nombre','$apellido','$profesion')";
     //realizar la consulta
      $consulta = mysqli_query($db,$sql);
      $resultado=mysqli_query($db,$consulta);
     

       } catch (\Throwable $th) {
        //throw $th;
       }

}

function eliminar_trabajador($rut){
  try {
    //importar credenciales
    require "database.php";

    //consulta a SQL
    $sql = "DELETE FROM trabajadores WHERE rut = '$rut'";
    //realizar la consulta
     $consulta = mysqli_query($db,$sql);
  

 } catch (\Throwable $th) {
   var_dump($th);
 }
  
}

///////////////ADMINISTRAR TURNOS Y PAGOS ///////////////////////////////////


function administracion_de_turnos(){
  try {
     //importar credenciales
     require "database.php";

     //consulta a SQL
      $sql= "SELECT * FROM turnos";
     //realizar la consulta
      $consulta = mysqli_query($db,$sql);

      return $consulta;

  } catch (\Throwable $th) {
    var_dump($th);
  }

}


function mostrar_nombre_mouse($rut){ //trabajadores
  try {
    //importar credenciales
    require "database.php";

    //consulta a SQL
     $sql= "SELECT nombre, apellido FROM trabajadores where rut='$rut'";
    //realizar la consulta
     $consulta = mysqli_query($db,$sql);
     $respuesta0= mysqli_fetch_assoc($consulta);
     $respuesta1=$respuesta0["nombre"];
     $respuesta2=$respuesta0["apellido"];
 

     return $respuesta1." ".$respuesta2;

 } catch (\Throwable $th) {
  return "Error en la consulta: " . $th->getMessage();

} }

function mostrar_nombre_mouse1($rut){ //empleados
  try {
    //importar credenciales
    require "database.php";

    //consulta a SQL
     $sql= "SELECT nombre, apellido FROM pacientes where rut='$rut'";
    //realizar la consulta
     $consulta = mysqli_query($db,$sql);
     $respuesta0= mysqli_fetch_assoc($consulta);
     $respuesta1=$respuesta0["nombre"];
     $respuesta2=$respuesta0["apellido"];
  

     return $respuesta1." ".$respuesta2;

 } catch (\Throwable $th) {
  return "Error en la consulta: " . $th->getMessage();

} }



function mostrar_trabajadores(){ //trabajadores
  try {
    //importar credenciales
    require "database.php";

    //consulta a SQL
     $sql= "SELECT rut,nombre, apellido FROM trabajadores";
    //realizar la consulta
     $consulta = mysqli_query($db,$sql);
     $respuesta0= mysqli_fetch_assoc($consulta);
     $respuesta1=$respuesta0["nombre"];
     $respuesta2=$respuesta0["apellido"];
 

     return $consulta;

 } catch (\Throwable $th) {
  return "Error en la consulta: " . $th->getMessage();

} }
 
function filtrarPorMes($mes){
  try {
    //importar credenciales
    require "database.php";

    //consulta a SQL
     $sql= "SELECT id, rut_trabajador,rut_paciente,fecha_turno,horas_trabajadas,pago_hora FROM turnos WHERE MONTH(fecha_turno)='$mes'";
    //realizar la consulta
     $consulta = mysqli_query($db,$sql);
     $resultado=mysqli_fetch_assoc($consulta);

     return $consulta;

 } catch (\Throwable $th) {
  return "Error en la consulta: " . $th->getMessage();

} }
function filtrarPorMesNombre($mes,$rut){
  try {
    //importar credenciales
    require "database.php";

    //consulta a SQL
     $sql= "SELECT id, rut_trabajador,rut_paciente,fecha_turno,horas_trabajadas,pago_hora FROM turnos WHERE MONTH(fecha_turno)='$mes' AND rut_trabajador='$rut' ";
    //realizar la consulta
     $consulta = mysqli_query($db,$sql);
     

     return $consulta;


 } catch (\Throwable $th) {
  return "Error en la consulta: " . $th->getMessage();

} }

function filtrarPorTrabajador($rut){
  try {
    //importar credenciales
    require "database.php";

    //consulta a SQL
     $sql= "SELECT * FROM turnos WHERE rut_trabajador='$rut'";
    //realizar la consulta
     $consulta = mysqli_query($db,$sql);
    

     return $consulta;

 } catch (\Throwable $th) {
  return "Error en la consulta: " . $th->getMessage();

} }

function agregar_turno($rut_trabajador,$rut_paciente,$fecha_turno,$horas_trabajadas,$pago_hora){
  try {
    require "database.php";

    $sql="INSERT INTO turnos(rut_trabajador,rut_paciente,fecha_turno,horas_trabajadas,pago_hora) VALUE('$rut_trabajador','$rut_paciente','$fecha_turno','$horas_trabajadas','$pago_hora')";
    $consulta=mysqli_query($db,$sql);
    return $consulta;

  } catch (\Throwable $th) {
    //throw $th;
  }

}





