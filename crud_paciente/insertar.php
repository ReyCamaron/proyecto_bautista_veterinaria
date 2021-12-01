<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombres'];
$edad=$_POST['edad'];
$especie=$_POST['especie'];
$raza=$_POST['raza'];
$tamano=$_POST['tamano'];
$nacimiento=$_POST['nacimineto'];


$sql="INSERT INTO paciente(`Nombre`, `Edad`, `Especie`, `Raza`, `Tamaño`, `Fech_nac`) VALUES('$nombre','$edad','$especie','$raza','$tamano','$nacimiento')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}else {
    echo "Hay un problema";
}
?>