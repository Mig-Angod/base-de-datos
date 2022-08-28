<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dis.css">
</head>
<body>
    <div id="contenedor">
        <div id="titulo"></div>
        <div id="imagen"><img src="images/universidad.png" alt=""></div>
        <div id="contenido">
            <div style="border: 2px solid black; width: 300;">
                Examen Final SIS 256<br>
                Estudiante: Miguel Angel Odrillas Mamani <br>
                CU: 35-4391
            </div>
        </div>
        <div id="menu"><select name="materia" id="materia">
    <option value="SIS256">SIS256</option>
    <option value="SIS258">SIS258</option>
    <option value="SIS406">SIS406</option>
</select></div>
        <div id="pie">
            <button onclick="javascript:inicio()" style="background: green">incio</button>
            <button style="background: green">Pregunta 2</button>
            <button onclick="javascript:pregunta3()" style="background: green">Pregunta 3</button>
            <button onclick="javascript:introducirdatos()" style="background: orange">Pregunta 4</button>
            <button onclick="javascript:pregunta5()" style="background: orange">Pregunta 5</button>
        </div>
    </div>
    <script src="java.js"></script>
</body>
</html>