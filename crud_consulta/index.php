<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM consulta";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PAGINA CONSULTA</title>
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

                                    <input type="date" class="form-control mb-3" name="fecha" placeholder="Fecha">
                                    <input type="text" class="form-control mb-3" name="empleado" placeholder="ID del empleado">
                                    <input type="text" class="form-control mb-3" name="consultorio" placeholder="Consultorio">
                                    <input type="text" class="form-control mb-3" name="procedimiento" placeholder="Procedimiento">
                                    <input type="text" class="form-control mb-3" name="receta" placeholder="Receta">
                                    <input type="text" class="form-control mb-3" name="medicamento" placeholder="Medicamento">
                                    <input type="submit" class="btn btn-primary">
                                    <a href="../index.php">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Id Epmleado</th>
                                        <th>Consultorio</th>
                                        <th>Procedimiento</th>
                                        <th>Receta</th>
                                        <th>medicamento</th>
                                        <th>idConsulta</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['fecha']?></th>
                                                <th><?php  echo $row['idempleado']?></th>
                                                <th><?php  echo $row['consultorio']?></th>
                                                <th><?php  echo $row['procedimiento']?></th>
                                                <th><?php  echo $row['receta']?></th>   
                                                <th><?php  echo $row['medicamento']?></th>   
                                                <th><?php  echo $row['idconsulta']?></th>  
                                                <th><a href="actualizar.php?id=<?php echo $row['idconsulta'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idconsulta'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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