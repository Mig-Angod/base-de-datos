<?php include("conexion.php");
$nro=$_POST['nro'];
$idtipohabitacion=$_POST["idtipohabitacion"];
$banoprivado=$_POST["banoprivado"];
$espacio=$_POST["espacio"];
$precio=$_POST["precio"];
$sql="INSERT INTO habitacion(nro,idtipohabitacion,banoprivado,espacio,precio) VALUES ('$nro','$idtipohabitacion','$banoprivado','$espacio','$precio')";
mysqli_query($con,$sql);
?>
<p>se inserto</p>
<meta http-equiv="refresh" content="2;url=listarH.php">