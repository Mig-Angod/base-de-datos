<?php
include("conexion.php");
$sql = "SELECT id,Nombres,Apellidos,Correo FROM usuario ";

if (isset($_GET["orden"])) {
    $orden = $_GET["orden"];
    $sql .= "ORDER BY $orden";
}
$consulta = mysqli_query($con, $sql);
?>
<table BORDER="1" CELLPADDING="10" CELLSPACING=0 >
    <tr BGCOLOR="0000FF" >
        <th ><a href="listar.php?orden=Nombres"><font color="white">Nombres</font> </a> </th>
        <th ><a href="listar.php?orden=apellidos"><FONT color="white">Apellidos</FONT> </a></th>
        <th ><a href="listar.php?orden=Correo"><font color="white">Correo</font> </a></th>
    </tr>
    <?php
    while ($fila = mysqli_fetch_array($consulta)) {
    ?>
    <tr BGCOLOR="#8DB3E2">
            <td><?php echo $fila["Nombres"]; ?></td>
            <td><?php echo $fila["Apellidos"]; ?></td>
            <td><?php echo $fila["Correo"]; ?></td>
            
        </tr>
    <?php } ?>
</table>
