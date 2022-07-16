<?php 

    include("conexion.php");
    $con=conectar();

    //Variables de consulta
    if(isset($_POST['buscar'])){

    $where="";
    $nombre=$_POST['xNombre'];
    $TipoNave=$_POST['xTipoNave'];
    }

    //Boton Buscar Filtros
    if(isset($_POST['buscar'])){
        if(empty($_POST['xTipoNave'])){
            $where = "where nombre like '".$nombre."%'";
        }
        else if(empty($_POST['xNombre'])){
            $where = "where TipoNave='".$TipoNave."'";
            
        }else{
            $where = "where nombre like '".$nombre."%' and TipoNave='".$TipoNave."'";
        }
    }
     //Consulta Base de Datos
        $sql="SELECT *  FROM nave $where";
        $query=mysqli_query($con,$sql);
        $resTipoNave = mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Inicio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Crear Nave</h1>
                                <form action="insertar.php" method="POST">

                                    <b>Nombre nave </b>
                                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre Nave">
                                    <b>Capacidad de empuje (Toneladas)</b>
                                    <input type="text" class="form-control mb-3" name="Empuje" placeholder="Empuje">
                                    <b>Peso (Toneladas) </b>
                                    <input type="text" class="form-control mb-3" name="Peso" placeholder="Peso">
                                    <b>Capacidad de carga (Toneladas)</b>
                                    <input type="text" class="form-control mb-3" name="Capacidad" placeholder="Capacidad de carga">
                                    <b>Potencia maxima (Caballos de fuerza)</b>
                                    <input type="text" class="form-control mb-3" name="Potencia" placeholder="Potencia">
                                    <b>Capacidad de combustible (Galones)</b>
                                    <input type="text" class="form-control mb-3" name="Combustible" placeholder="Combustible">
                                    <b>Tipo nave</b>
                                    <!--<input type="text" class="form-control mb-3" name="TipoNave" placeholder="Tipo nave"> -->
                                    <select name="TipoNave" placeholder="Tipo nave"> 
                                        <option value="vehiculos lanzadera">vehiculos lanzadera</option>
                                        <option value="naves espaciales no tripuladas">naves espaciales no tripuladas</option>
                                        <option value="naves espaciales tripuladas">naves espaciales tripuladas</option>
                                    </select>
                                    <br>
                                    <br>
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <form action="" method="post">
                                <input type="text" placeholder="Nombre.." name="xNombre">
                                <select name="xTipoNave" id="">
                                    <option value="">--Seleccione--</option>
                                    <option value="vehiculos lanzadera">vehiculos lanzadera</option>
                                    <option value="naves espaciales no tripuladas">naves espaciales no tripuladas</option>
                                    <option value="naves espaciales tripuladas">naves espaciales tripuladas</option>
                                </select>
                                <button name="buscar" type="submit">Buscar</button>

                            </form>

                            <table class="table">
                                <thead class="table-success table-striped">
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th>Tipo nave</th>
                                        <th>Capacidad de carga (Toneladas)</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['Id']?></th>
                                                <th><?php  echo $row['Nombre']?></th>
                                                <th><?php  echo $row['TipoNave']?></th>
                                                <th><?php  echo $row['Carga']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['Id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['Id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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