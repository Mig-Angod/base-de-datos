<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>examen final</title>
    <link rel="stylesheet" href="diseno.css">
</head>

<body>
    <div class="contenedor">
        <img src="images/universidad.png" alt="">
        <div class="inicio1">
            <div class="cabezera">
                <table BORDER="1px" style="width: 716px;height: 78px;">
                    <tr>
                        <th onclick="javascript:inicio()" name="inicio">inicio</th>
                        <th onclick="javascript:lista()">lista</th>
                        <th onclick="javascript:horarios()">horarios</th>
                        <th onclick="javascript:calificaciones()">calificaciones</th>
                        <th onclick="javascript:informes()">informes</th>
                    </tr>
                </table>
            </div>
            <div id="titulo"> <div id="titulo1"></div> <div id="titulo2"></div> </div>
        </div>
        <div class="izquierda">
            <div id="asignatura">Asignatura</div>
            <div id="menu">
                <table>
                    <tr>
                        <th onclick="javascript:seleccion1()" id="SIS256" >SIS256</th>
                    </tr>
                    <tr>
                        <th onclick="javascript:seleccion2()" id="SIS258" >SIS258</th>
                    </tr>
                    <tr>
                        <th onclick="javascript:seleccion3()" id="SIS406" >SIS406</th>
                    </tr>
                </table>
            </div>
        </div>
        <div id="contenido">
        <div style="border: 2px solid black; width: 300;">
                Examen Final SIS 256<br>
                Estudiante: Miguel Angel Odrillas Mamani <br>
                CU: 35-4391 <br>
                esta es la <span>
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
                </span> vez que visita la pagina
            </div>
        </div>
    </div>
    <script src="java.js">
    </script>
</body>

</html>