<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT * FROM empleado";
$query = mysqli_query($con, $sql);
?>
<link href="css/style.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <h1>Empleado</h1>
            <form action="insertar.php" method="POST">
                <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres">
                <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">
                <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono">
                <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion">
                <input type="text" class="form-control mb-3" name="correo" placeholder="Correo electrónico">
                <input type="text" class="form-control mb-3" name="curp" placeholder="CURP">
                <input type="submit" class="btn btn-primary">
                <a href="../index.php">Inicio</a>
            </form>
        </div>
        <div class="col-md-2">
            <table class="table">
                <thead class="table-success table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Telefono</th>
                        <th>Dirección</th>
                        <th>Correo</th>
                        <th>CURP</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <th><?php echo $row['idEmpleado'] ?></th>
                            <th><?php echo $row['nomrbres'] ?></th>
                            <th><?php echo $row['apellidos'] ?></th>
                            <th><?php echo $row['telefono'] ?></th>
                            <th><?php echo $row['direccion'] ?></th>
                            <th><?php echo $row['correo'] ?></th>
                            <th><?php echo $row['CURP'] ?></th>
                            <th><a href="actualizar.php?id=<?php echo $row['idEmpleado'] ?>" class="btn btn-info">Editar</a></th>
                            <th><a href="delete.php?id=<?php echo $row['idEmpleado'] ?>" class="btn btn-danger">Eliminar</a></th>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>