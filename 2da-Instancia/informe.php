<?php include("conexion.php");
$mes=$_GET['mes'];
$p1=$_GET['p1'];
$p2=$_GET['p2'];
$p3=$_GET['p3'];
$sql= "INSERT INTO informes (materia,mes,porcentaje) VALUES ('SIS256','$mes','$p1'),('SIS258','$mes','$p2'),('SIS406','$mes','$p3')";
mysqli_query($con, $sql);
?>