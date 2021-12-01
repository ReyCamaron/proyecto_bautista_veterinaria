<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$especie=$_POST['especie'];
$raza=$_POST['raza'];
$tamano=$_POST['tamano'];
$nacimiento=$_POST['nacimiento'];

$sql="UPDATE paciente SET  Nombre='$nombre',Edad='$edad',Especie='$especie',Raza='$raza',Tamaño='$tamano',Fech_nac='$nacimiento' WHERE Num_pac='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>