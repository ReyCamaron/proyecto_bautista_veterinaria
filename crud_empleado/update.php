<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$curp=$_POST['curp'];

$sql="UPDATE empleado SET nomrbres='$nombres',apellidos='$apellidos',telefono='$telefono',direccion='$direccion',correo='$correo', CURP='$curp' WHERE idEmpleado='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        header("location: index.php");
    }else{
        echo "Hay un error";
    }
?>