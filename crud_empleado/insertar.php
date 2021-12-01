<?php
include("conexion.php");
$con=conectar();

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$curp=$_POST['curp'];

$sql="INSERT INTO empleado(`nomrbres`, `apellidos`, `telefono`, `direccion`, `correo`, `CURP`) VALUES('$nombres','$apellidos','$telefono','$direccion','$correo','$curp')";
$query= mysqli_query($con,$sql);

if($query){
    header("location: index.php");
}else {
    echo "Hay un problema";
}
?>