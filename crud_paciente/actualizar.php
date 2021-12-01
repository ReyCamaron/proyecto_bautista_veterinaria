<?php
include("conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM paciente WHERE Num_pac='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <form action="update.php" method="POST">

            <input type="hidden" class="form-control mb-3" name="id" placeholder="ID" value="<?php echo $row['Num_pac']  ?>">
            <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['Nombre']  ?>">
            <input type="text" class="form-control mb-3" name="edad" placeholder="Edad" value="<?php echo $row['Edad']  ?>">
            <input type="text" class="form-control mb-3" name="especie" placeholder="Especie" value="<?php echo $row['Especie']  ?>">
            <input type="text" class="form-control mb-3" name="raza" placeholder="Raza" value="<?php echo $row['Raza']  ?>">
            <input type="text" class="form-control mb-3" name="tamano" placeholder="Tamaño" value="<?php echo $row['Tamaño']  ?>">
            <input type="text" class="form-control mb-3" name="nacimiento" placeholder="Fecha de nacimiento" value="<?php echo $row['Fech_nac']  ?>">

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
</body>

</html>