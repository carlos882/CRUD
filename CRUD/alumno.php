<?php 
    include("conexion.php");
    $conn = conectar(); 
    $sql = $conn->query("select * from alumno");
    $query = $sql->fetchAll(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">
    <head>

        

        <title> PAGINA ALUMNO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

         <style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}   

</style>
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1><Center>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="cod_estudiante" placeholder="cod estudiante">
                                    <input type="text" class="form-control mb-3" name="dni" placeholder="CI">
                                    <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres">
                                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">

                                    
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                             <h1> <Center>Formulario</h1>
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>CI</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                         <?php
                                            foreach($query as $query){
                                        ?>
                                            <tr>
                                                 <th><?php  echo $query->cod_estudiante ?></th>
                                                 <th><?php  echo $query->dni ?></th> 
                                                 <th><?php  echo $query->nombres ?></th> 
                                                 <th><?php  echo $query->apellidos ?></th>     
                                                 <th>
                                                    <a href="actualizar.php?id=<?php echo $query->cod_estudiante ?>" class="btn btn-info">Editar
                                                    </a>
                                                </th>
                                                <th>
                                                    <a href="delete.php?id=<?php echo $query->cod_estudiante ?>" class="btn btn-danger">Eliminar</a>
                                                </th>                                        
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