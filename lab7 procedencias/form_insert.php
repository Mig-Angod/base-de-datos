<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('enlace.php');
    $sql="SELECT id,procedencia,codigopais FROM procedencias";
    $resultado=mysqli_query($con,$sql);
    ?>
    <form action="insert.php" method="post">
        <label for="procedencia">procedencia</label>
        <input type="text" name="procedencia">
        <br>
        <label for="codigopais">codigo pais</label>
        <input type="text" name="codigopais">
        <br>    
        <input type="submit" value="Registrar">
    </form>
</body>
</html>