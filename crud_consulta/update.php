<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$fecha=$_POST['fecha'];
$empleado=$_POST['empleado'];
$consultorio=$_POST['consultorio'];
$procedimiento=$_POST['procedimiento'];
$receta=$_POST['receta'];
$medicamento=$_POST['medicamento'];

$sql="UPDATE consulta SET  fecha='$fecha',idempleado='$empleaxo',consultorio='$consultorio',procedimiento='$procedimiento',receta='$receta',medicamento='$medicamento' WHERE idconsulta='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>