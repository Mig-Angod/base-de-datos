<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
    <style>
         
    </style>
</head>
<body>
    <?php
    $limite=$_GET['limite'];
    $numero=$_GET['numero'];
	$altura=$_GET['alto'].'%';
	$anchura=$_GET['anchura'].'%';
    //$wid=$anchura.'%';
    echo $anchura.'<bt> => ancho<br>';
    echo $altura.'<bt> =>alto<br>';
    $operacion=$_GET['operacion'];
    switch($operacion){
        case 'multiplicacion':
            ?>
            <table table BORDER="1" CELLPADDING="10" CELLSPACING=0 >
                <tr class="celda">
                <?php
                $acum=0;
                for ($con1=1;$con1<=$limite;$con1++){
                    for ($con2=0;$con2<=4;$con2++) {
                        if($con2==0){
                            echo "<td>$con1";
                            echo "</td>";
                        }
                        if($con2==1){
                            echo "<td>*";
                            echo "</td>";
                        }
                        if($con2==3){
                            echo "<td >$numero";
                            echo "</td>";
                        }
                        if($con2==4){
                            $acum=$numero*$con1;
                            echo "<td >$acum";
                            echo "</td>";
                        }
                    }
                    ?>
                    </tr>
                        <?php
                            }
                        ?>                
            </table>
            <?php
            break;
        case 'suma':
            ?>
            <table table BORDER="1" CELLPADDING="10" CELLSPACING=0>
                <tr>
                <?php
                $acum=0;
                for ($con1=1;$con1<=$limite;$con1++){
                    for ($con2=0;$con2<=4;$con2++) {
                        if($con2==0){
                            echo "<td width='15px' height='15px'>$con1";
                            echo "</td>";
                        }
                        if($con2==1){
                            echo "<td >+";
                            echo "</td>";
                        }
                        if($con2==3){
                            echo "<td >$numero";
                            echo "</td>";
                        }
                        if($con2==4){
                            $acum=$con1+$numero;
                            echo "<td >$acum";
                            echo "</td>";
                        }
                    }
                    ?>
                    </tr>
                        <?php
                            }
                        ?>                
            </table>
            <?php
            break;
        case 'resta':
            ?>
            <table table BORDER="1" CELLPADDING="10" CELLSPACING=0>
                <tr>
                <?php
                $acum=0;
                for ($con1=1;$con1<=$limite;$con1++){
                    for ($con2=0;$con2<=4;$con2++) {
                        if($con2==0){
                            echo "<td >$con1";
                            echo "</td>";
                        }
                        if($con2==1){
                            echo "<td >-";
                            echo "</td>";
                        }
                        if($con2==3){
                            echo "<td >$numero";
                            echo "</td>";
                        }
                        if($con2==4){
                            $acum=$numero-$con1;
                            echo "<td >$acum";
                            echo "</td>";
                        }
                    }
                    ?>
                    </tr>
                        <?php
                            }
                        ?>                
            </table>
            <?php
            break;
        case 'division':
            ?>
            <table table BORDER="1" CELLPADDING="10" CELLSPACING=0>
                <tr>
                <?php
                $acum=0;
                for ($con1=1;$con1<=$limite;$con1++){
                    for ($con2=0;$con2<=4;$con2++) {
                        if($con2==0){
                            echo "<td >$con1";
                            echo "</td>";
                        }
                        if($con2==1){
                            echo "<td >/";
                            echo "</td>";
                        }
                        if($con2==3){
                            echo "<td >$numero";
                            echo "</td>";
                        }
                        if($con2==4){
                            $acum=$numero/$con1;
                            echo "<td >$acum";
                            echo "</td>";
                        }
                    }
                    ?>
                    </tr>
                        <?php
                            }
                        ?>                
            </table>
            <?php
            break;
            default:
            echo 'la operacion es incorrecta pruebe -----suma___resta___multiplicacion___division';
    }
    ?>
</body>
</html>