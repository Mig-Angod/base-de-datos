<?php include("conexion.php");
$materia=$_GET['materia'];
$sql="SELECT * FROM alumnos WHERE materia='$materia'";
$consulta=mysqli_query($con,$sql);
?>
<table table BORDER="10" CELLPADDING="0" CELLSPACING=0 >
    <tr bgcolor="#007C9B">
        <th>Nro </th>
        <th>Nombres y Apellidos</th>
        <th>Calificacion</th>
    </tr>
    <?php
    while ($fila = mysqli_fetch_array($consulta)) {
    ?>
    <tr>
        <td><?php echo $fila['id']; ?> </td>
        <td><?php echo $fila['nombres_apellidos']; ?> </td>
        <td><input type="number" value="<?php echo $fila['calificacion']; ?>"> </td>
    </tr>
    <?php } ?>
</table>