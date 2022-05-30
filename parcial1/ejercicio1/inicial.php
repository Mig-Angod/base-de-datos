<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <div class="contenedor">
        <div class="encabezado">
            <div class="titulo1">UNIVERSIDAD DE SAN FRANCISCO XAVIER DE CHUQUISACA</div>
            <div class="titulo2">FACULTDAD DE TECNOLOGIA</div>                
            <p class="titulo3">Carrera Ing de Sistemas - Ing en ciencias de la Computación</p>
        </div>
        <div class="izquierda">
            <span class="roj">Alumno: </span> <a>Miguel Angel Odrillas Mamani</a>
            
        </div>
        <div class="derecha">
            <span class="roj">CU:</span><a>112-41</a>
        </div>
        <div class ="centro">
        <ul class="menuvertical">
                <li><a href="uno.html">Inicio</a></li>
                <li><a href="dos.html">2</a></li>
                <li><a href="tres.html">3</a></li>
                <li><a href="cuatro.html">4</a></li>
                <li><a href="cinco.html">5</a></li>
            </ul>
        </div>
        <div class="pie">
            Primer Examen Parcial
            <br>Usted visito esta pagina:
            <a class="roj">
            <?php
if (isset( $_COOKIE['contador'] ) ) {
$valor=$_COOKIE['contador']+1;
echo "$valor vez";
setcookie("contador",$valor,0);
}
else
{
 echo "1 vez";
 setcookie("contador",1,0);
}
?> 
</a>
        </div>
        
    </div>
</body>

</html>