<?php include("conexion.php");
    $sql = "SELECT id,descripcion,nrocamas FROM tipohabitaciones";
    $consulta = mysqli_query($con,$sql);
?>
<table border>
<th>ID</th>
<th>DESCRIPCION</th>
<th>Nro CAMAS</th>
</tr>
<?php
while($fila=mysqli_fetch_array($consulta))
{
    ?>
    <tr>
        <td ><?php echo $fila["id"];?></td>
        <td><?php echo $fila["descripcion"];?></td>
        <td><?php echo $fila["nrocamas"];?></td>
    </tr>
<?php } ?>
</table>
<a href="form_insertTH.php">
    <br>
    <br>
    Insertar</a>