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
    <?php
    $filas=$_GET['filas'];
    $columnas=$_GET['columnas'];
	$altura=$_GET['alto'];
	$anchura=$_GET['anchura'];
    ?>
    <table border width:$anchura heigth:$altura>
        <tr>
            <?php 
            $acum=0;
            for ($con1=0;$con1<=$filas;$con1++) { 
                for ($con2=0;$con2<=$columnas;$con2++) {
                    if($con1==0){
                        if($con2!=0){
                            echo "<td bgcolor='red'>$con2";
                            echo "</td>";
                        }else{
                            echo "<td class='fondo'>X";
                        echo "</td>";
                        }
                    }else{
                        if($con2==0){
                            echo "<td class='fondo'>$con1";
                            echo "</td>";
                        }else{
                            $acum=$acum+1;
                            echo "<td>$acum";
                            echo "</td>";
                        }
                    }
                }
            ?>
        </tr>
            <?php
                }
            ?>
    </table>
</body>
</html>