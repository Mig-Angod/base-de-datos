<?php include("conexion.php");
    $descripcion = $_POST["descripcion"];
    $nrocamas = $_POST["nrocamas"];

    $sql = "INSERT INTO tipohabitaciones(descripcion,nrocamas) VALUES('$descripcion','$nrocamas')";
    mysqli_query($con,$sql);
?>
<p>Se inserto con exito</p>
<meta http-equiv="refresh" content="2;url=listarTH.php">