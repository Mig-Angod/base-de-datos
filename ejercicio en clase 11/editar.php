<?php include('verificar.php');
include('permiso.php');
include("conexion.php");

$fotografia=$_FILES['fotografia']['name'];
if ($fotografia!="") {
    copy($_FILES['fotografia']['tmp_name'],"images/".$fotografia);
}


$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellidos"];
$direccion = $_POST["direccion"];
$f_nacimiento = $_POST["fecha_nacimiento"];
$sexo = $_POST["sexo"];
$telefono = $_POST["telefono"];
$profesion_id = $_POST["profesion_id"];

$sql = "UPDATE persona SET nombre='$nombre',apellidos='$apellido',direccion='$direccion',
fecha_nacimiento='$f_nacimiento',sexo='$sexo',telefono='$telefono',profesion_id=$profesion_id,fotografia='$fotografia' WHERE id=$id";
// echo $sql;
mysqli_query($con, $sql);
?>
<p>Se edito con exito</p>
Footer
© 2022 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
