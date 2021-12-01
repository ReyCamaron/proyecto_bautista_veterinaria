<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$telefono=$_POST['telefono'];

$sql="UPDATE cliente SET nombres='$nombres',apellidos='$apellidos',direccion='$direccion',correo='$correo',usuario='$usuario', telefono='$telefono' WHERE idCliente='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        header("location: index.php");
    }else{
        echo "Hay un error";
    }
?>