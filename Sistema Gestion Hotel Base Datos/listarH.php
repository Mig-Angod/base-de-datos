<?php include("conexion.php");
    $sql = "SELECT H.id,nro,idtipohabitacion,banoprivado,espacio,precio  FROM habitacion H LEFT JOIN tipohabitaciones TH ON H.idtipohabitacion = TH.id";
    $consulta = mysqli_query($con,$sql);
?>
<table border='1'><tr>
<th>iD</th>
<th>Nro</th>
<th>Tipo Habitacion</th>
<th>bano Privado</th>
<th>espacio</th>
<th>precio</th> 
</tr>
<?php
while($fila=mysqli_fetch_array($consulta))
{
    ?>
    <tr>
        <td><?php echo $fila["id"];?></td>
        <td><?php echo $fila["nro"];?></td>
        <td><?php echo $fila["idtipohabitacion"];?></td>
        <td><?php echo $fila["banoprivado"];?></td>
        <td><?php echo $fila["espacio"];?></td>
        <td><?php echo $fila["precio"];?></td>
        <td><a href="editarH.php?id=<?php echo $fila ['id']?>">Editar</a><a href="eliminarH.php?id=<?php echo $fila ['id']?>"> Eliminar </a></td>
    </tr>
<?php } ?>
</table>

<a href="form_insertarH.php">Insertar</a>