<?php

include("conexion.php");
$con=conectar();

$Id = $_POST['Id'];
$nombre=$_POST['Nombre'];
$empuje=$_POST['Empuje'];
$peso=$_POST['Peso'];
$Carga=$_POST['Carga'];
$potencia=$_POST['Potencia'];
$combustible=$_POST['Combustible'];
$TipoNave=$_POST['TipoNave'];

$sql="UPDATE nave SET  Nombre='$nombre',Empuje='$empuje',Peso='$peso',Carga='$Carga',Potencia='$potencia',Combustible='$combustible',TipoNave='$TipoNave' WHERE Id='$Id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>