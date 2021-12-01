<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM consulta WHERE idconsulta='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }else{
        echo "hay algo mal";
    }
?>
