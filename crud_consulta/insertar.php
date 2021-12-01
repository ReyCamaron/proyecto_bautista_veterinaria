<?php
include("conexion.php");
$con=conectar();

$fecha=$_POST['fecha'];
$empleado=$_POST['empleado'];
$consultorio=$_POST['consultorio'];
$procedimiento=$_POST['procedimiento'];
$receta=$_POST['receta'];
$medicamento=$_POST['medicamento'];


$sql="INSERT INTO consulta(`fecha`, `idempleado`, `consultorio`, `procedimiento`, `receta`, `medicamento`) VALUES('$fecha','$empleado','$consultorio','$procedimiento','$receta','$medicamento')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}else {
    echo "Hay un problema";
}
?>