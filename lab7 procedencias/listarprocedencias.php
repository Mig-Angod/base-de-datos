<?php include("enlace.php");
    $sql = "SELECT id,procedencia,codigopais FROM procedencias";
    $consulta = mysqli_query($con,$sql);
?>
<table border bordercolor="blue"><tr bgcolor="blue">
<th>ID</th>
<th>PROCEDENCIA</th>
<th>CODIGO PAIS</th>
</tr>
<?php
while($fila=mysqli_fetch_array($consulta))
{
    ?>
    <tr>
        <td ><?php echo $fila["id"];?></td>
        <td><?php echo $fila["procedencia"];?></td>
        <td><?php echo $fila["codigopais"];?></td>
    </tr>
<?php } ?>
</table>
<a href="form_insert.php">
    <br>
    <br>
    Insertar</a>