<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['Nombre'];
$empuje=$_POST['Empuje'];
$peso=$_POST['Peso'];
$capacidad=$_POST['Capacidad'];
$potencia=$_POST['Potencia'];
$combustible=$_POST['Combustible'];
$TipoNave=$_POST['TipoNave'];


$sql="INSERT INTO nave VALUES('$id','$nombre','$empuje','$peso','$capacidad','$potencia','$combustible','$TipoNave')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>
