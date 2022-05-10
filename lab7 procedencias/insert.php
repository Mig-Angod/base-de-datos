<?php include("enlace.php");
    $procedencia = $_POST["procedencia"];
    $codigopais = $_POST["codigopais"];

    $sql = "INSERT INTO procedencias(procedencia,codigopais) VALUES('$procedencia','$codigopais')";
    mysqli_query($con,$sql);
?>
<p>insert exitoso</p>
<meta http-equiv="refresh" content="2;url=listarprocedencias.php">