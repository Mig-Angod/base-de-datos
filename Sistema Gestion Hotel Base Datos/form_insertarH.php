<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insertarH.php" method="post">
        <label for="nro">Nro</label>
        <input type="int" name="nro">
        <br>
        <label for="idtipohabitacion">Id Tipo Habitacion</label>
        <input type="int" name="idtipohabitacion">
        <br>
        <label for="banoprivado">Bano Privado</label>
        <input type="bit" name="banoprivado">
        <br>
        <label for="espacio">Espacio</label>
        <input type="decimal" name="espacio">
        <br>
        <label for="precio">Precio</label>
        <input type="decimal" name="precio">
        <br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>