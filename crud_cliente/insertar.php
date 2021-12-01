<?php
include("conexion.php");
$con=conectar();

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$telefono=$_POST['telefono'];

$sql="INSERT INTO cliente(`nombres`, `apellidos`, `direccion`, `correo`, `usuario`, `telefono`) VALUES('$nombres','$apellidos','$direccion','$correo','$usuario','$telefono')";
$query= mysqli_query($con,$sql);

if($query){
    header("location: index.php");
}else {
    echo "Hay un problema";
}
?>