<?php include('conexion.php')
$id=$_POST['id'];
$nro=$_POST['nro'];
$idtipohabitacion=$_POST["idtipohabitacion"];
$banoprivado=$_POST["banoprivado"];
$espacio=$_POST["espacio"];
$precio=$_POST["precio"];
$sql="UPDATE habitacion SET nro=$nro,idtipohabitacion=$idtipohabitacion,banoprivado=$banoprivado,espacio=$espacio,precio=$precio WHERE id=$id";
mysqli_query($con,$sql)

?>
<p>actualizacion correcta</p>
<meta http-equiv="refresh" content="2;url=listarH.php">