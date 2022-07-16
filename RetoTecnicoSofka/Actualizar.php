<?php 
    include("Conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM nave WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
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
                    
                                <input type="hidden" name="Id" value="<?php echo $row['Id']  ?>">
                                <b>Nombre nave</b>
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']  ?>">
                                <b>Capacidad de empuje (Toneladas)</b>
                                <input type="text" class="form-control mb-3" name="Empuje" placeholder="Empuje" value="<?php echo $row['Empuje']  ?>">
                                <b>Peso (Toneladas)</b>
                                <input type="text" class="form-control mb-3" name="Peso" placeholder="Peso" value="<?php echo $row['Peso']  ?>">
                                <b>Capacidad de carga (Toneladas)</b>
                                <input type="text" class="form-control mb-3" name="Carga" placeholder="Capacidad" value="<?php echo $row['Carga']  ?>">
                                <b>Potencia maxima (caballos de fuerza)</b>
                                <input type="text" class="form-control mb-3" name="Potencia" placeholder="Potencia" value="<?php echo $row['Potencia']  ?>">
                                <b>Capacidad de combustible (Galones)</b>
                                <input type="text" class="form-control mb-3" name="Combustible" placeholder="Combustible" value="<?php echo $row['Combustible']  ?>">
                                <b>Tipo nave</b>
                                <input type="text" class="form-control mb-3" name="TipoNave" readonly placeholder="TipoNave" value="<?php echo $row['TipoNave']  ?>">
                                <select name="TipoNave" placeholder="Tipo nave"> 
                                        <option value="vehiculos lanzadera">vehiculos lanzadera</option>
                                        <option value="naves espaciales no tripuladas">naves espaciales no tripuladas</option>
                                        <option value="naves espaciales tripuladas">naves espaciales tripuladas</option>
                                </select>
                                    <br>
                                    <br>


                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                           
                    </form>
                    <a href="index.php"><button class="btn btn-danger btn-block"> Volver </button></a>
                </div>
    </body>
</html>