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
    $id=$_GET["id"];
    $sql = "SELECT * FROM libros WHERE id=$id";
    $consulta=mysqli_query($con,$sql);
    $fila=mysqli_fetch_array($consulta);

    $sql2="SELECT * FROM carreras";
    $resultado=mysqli_query($con,$sql2);

    ?>  
    <form action="javascript:editar()" method="post" enctype="multipart/form-data" id="form-editar">
    <?php if ($fila['imagen'] != "") { ?>
                    <img width="100px" src="images\<?php echo $fila['imagen']; ?>" alt="">
                <?php } ?>
        <label for="imagen">imagen</label>
        <input type="file" name="imagen" >
     <input type="hidden" name="id" value="<?php echo $fila['id']?>">
        <label for="titulo">titulo</label>
        <input type="text" name="titulo" value="<?php echo $fila['titulo']?>" >
        <br>
        <label for="autor">autor</label>
        <input type="text" name="autor" value="<?php echo $fila['autor']?>">
        <br>
        <label for="ideditorial">ideditorial</label>
        <input type="text" name="ideditorial" value="<?php echo $fila['ideditorial']?>">
        <br>
        <label for="anio">anio</label>
        <input type="number" name="anio" value="<?php echo $fila['anio']?>">
        <br>
        <label for="idusuario">idusuario</label>
        <input type="number" name="idusuario" value="<?php echo $fila['idusuario']?>">
        <br>  
        <label for="idcarrera">idcarrera</label><?php echo trim($fila['idcarrera'])?>
        <select name="idcarrera">
            <?php while($fila2=mysqli_fetch_array($resultado)){ 
                ?>
            <option value="<?php echo $fila2['id']; ?>" <?php echo $fila2['id']==$fila['idcarrera']?'selected':'' ?> ><?php echo $fila2['id']; ?></option>
            <?php } ?>
        </select>
        <br> 
        <input type="submit" value="actualizar">
    </form>
</body>
</html>