<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM paciente";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PAGINA PACIENTE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombre">
                                    <input type="number" class="form-control mb-3" name="edad" placeholder="Edad">
                                    <input type="text" class="form-control mb-3" name="especie" placeholder="Especie">
                                    <input type="text" class="form-control mb-3" name="raza" placeholder="Raza">
                                    <input type="text" class="form-control mb-3" name="tamano" placeholder="Tamaño">
                                    <input type="date" class="form-control mb-3" name="nacimineto" placeholder="Fecha de nacimiento">
                                    <input type="submit" class="btn btn-primary">
                                    <a href="../index.php">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Edad</th>
                                        <th>Especie</th>
                                        <th>Raza</th>
                                        <th>Tamaño</th>
                                        <th>Fecha_nac</th>
                                        <th>Num_pac</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['Nombre']?></th>
                                                <th><?php  echo $row['Edad']?></th>
                                                <th><?php  echo $row['Especie']?></th>
                                                <th><?php  echo $row['Raza']?></th>
                                                <th><?php  echo $row['Tamaño']?></th>
                                                <th><?php  echo $row['Fech_nac']?></th>
                                                <th><?php  echo $row['Num_pac']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['Num_pac'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['Num_pac'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>