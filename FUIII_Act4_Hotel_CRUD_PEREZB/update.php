<?php

include("conexion.php");
$con=conectar();

$idempleado=$_POST['idempleado']; 
$nombres=$_POST['nombres']; 
$apellidos=$_POST['apellidos'];
$rfc=$_POST['rfc']; 
$direccion=$_POST['direccion']; 



$sql="UPDATE empleado SET  nombres='$nombres',apellidos='$apellidos',rfc='$rfc',direccion='$direccion' WHERE idempleado='$idempleado'"; 
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php"); 
    }
?>