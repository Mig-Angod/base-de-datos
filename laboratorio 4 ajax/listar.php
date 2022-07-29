<?php include('conexion.php');
$sql = "SELECT * FROM libros ";
if (isset($_GET["orden"])) {
    $orden = $_GET["orden"];
    $sql .= "ORDER BY $orden";
}
$consulta = mysqli_query($con,$sql);
?>
<table BORDER="10" CELLPADDING="20" CELLSPACING=5 style="text-align:center">
    <tr>
        <th><a href="javascript:ordenar('imagen')">IMAGEN</a></th>
        <th><a href="javascript:ordenar('titulo')">TITULO</a></th>
        <th><a href="javascript:ordenar('autor')">autor</a></th>
        <th><a href="javascript:ordenar('ideditorial')">editorial</a></th>
        <th><a href="javascript:ordenar('anio')">anio</a></th>
        <th>usuario</th>
        <th><a href="javascript:ordenar('idcarrera')">carrera</a></th>
    </tr>
    <?php while($fila = mysqli_fetch_array($consulta)) { ?>
    <tr>
        <td><?php if ($fila['imagen'] != "") { ?>
            <img width="100px" src="Laboratorio 4/images/<?php echo $fila['imagen']; ?>" alt="">
            <?php } ?>
        </td>
        <td><?php echo $fila["titulo"]; ?></td>
            <td><?php echo $fila["autor"]; ?></td>
            <td><?php echo $fila["ideditorial"]; ?></td>
            <td><?php echo $fila["anio"]; ?></td>
            <td><?php echo $fila["idusuario"]; ?></td>              
            <td><?php echo $fila["idcarrera"]; ?></td>
            <td><a href="javascript:formeditar(<?php echo $fila['id'] ?>)">Editar</a></td>
    </tr>
    <?php } ?>
</table>
<script src="lab.js"></script>