<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('conexion.php');
    $sql="SELECT id,nro,idtipohabitacion,banoprivado,espacio,precio FROM habitacion";
    $resultado=mysqli_query($con,$sql);
    ?>
    <form action="editarH.php" method="post">    
        <label for="nro">Nro</label>
        <input type="int" name="nro" value="<?php echo $fila['nro']?>" >
        <br>
        <label for="idtipohabitacion">idtipohabitacion</label>
        <input type="int" name="idtipohabitacion" value="<?php echo $fila['idtipohabitacion']?>">
        <br>
        <label for="banoprivado">banoprivado</label>
        <input type="bit" name="banoprivado" value="<?php echo $fila['banoprivado']?>">
        <br>
        <label for="espacio">Espacio</label>
        <input type="decimal" name="espacio" value="<?php echo $fila['espacio']?>">
        <br>
        <label for="precio">Precio</label>
        <input type="decimal" name="precio" value="<?php echo $fila['precio']?>">
        <br>
        <input type="submit" value="actualizar">
    </form>
</body>
</html>