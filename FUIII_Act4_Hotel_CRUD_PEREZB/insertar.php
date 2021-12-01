<?php
include("conexion.php");
$con=conectar();

$idempleado=$_POST['idempleado'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$rfc=$_POST['rfc'];
$direccion=$_POST['direccion'];

$sql="INSERT INTO empleado VALUES('$idempleado', '$nombres', '$apellidos', '$rfc', '$direccion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("location: empleado.php");
}else {
    echo "hay un problema";
}
?>

