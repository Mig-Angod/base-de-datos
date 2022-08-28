<?php include("conexion.php");
//$materia=$_GET['materia'];
$materia="SIS258";
$sql="SELECT * FROM informes WHERE materia='$materia'";
$consulta=mysqli_query($con, $sql);
?>
<table BORDER="1" CELLPADDING="0" CELLSPACING=0>
    <tr>
        <td><?php echo $materia ?></td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <th>mes</th>
        <th>porcentaje</th>
    </tr>
<?php while($fila=mysqli_fetch_array($consulta)){ ?>
    <tr>
        <td><?php echo $fila['mes'];?></td>
        <td><?php echo $fila['porcentaje'] ?></td>
    </tr>
<?php } ?>
</table>