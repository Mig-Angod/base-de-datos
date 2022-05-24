<?php include('conexion.php');
$id = $_GET["id"];
$sql = "DELETE FROM habitacion WHERE id=$id";
mysqli_query($con,$sql);
?>
<meta http-equiv="refresh" content="1;url=listarH.php">