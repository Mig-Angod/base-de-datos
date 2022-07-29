<?php
include("conexion.php");

$imagen=$_FILES['imagen']['name'];
if ($imagen!="") {
    copy($_FILES['imagen']['tmp_name'],"Laboratorio 4/images/".$imagen);
}


$id = $_POST["id"];
$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$ideditorial = $_POST["ideditorial"];
$anio = $_POST["anio"];
$idusuario = $_POST["idusuario"];
$idcarrera = $_POST["idcarrera"];

$sql = "UPDATE libros SET imagen='$imagen',titulo='$titulo',autor='$autor',ideditorial='$ideditorial',
anio='$anio',idusuario='$idusuario',idcarrera='$idcarrera' WHERE id=$id";
// echo $sql;
mysqli_query($con, $sql);
?>
<p>Se edito con exito</p>

<meta http-equiv="refresh" content="2;url=laboratorio4.html">
