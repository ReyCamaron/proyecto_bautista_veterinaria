<?php

include("conexion.php");
$con=conectar();

$ID=$_GET['id'];

$sql="DELETE FROM cliente WHERE idCliente='$ID'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }else{
        echo "hay un error";
    }
?>
