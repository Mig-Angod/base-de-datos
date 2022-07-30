<?php include('conexion.php');
//$materia="SIS258";
$materia=$_GET['materia'];
$sql="SELECT * FROM horarios WHERE materia='$materia'";
$consulta = mysqli_query($con, $sql);
?>
<table table BORDER="10" CELLPADDING="20" CELLSPACING=5 >
    <tr bgcolor="#3f90a4">
        <th>hora</th>
        <th>lunes</th>
        <th>martes</th>
        <th>miercoles</th>
        <th>jueves</th>
        <th>viernes</th>
    </tr>
    <?php
    $fila = mysqli_fetch_array($consulta);
    for ($i=8;$i<=17;$i++){    
        ?>
            <tr>
                <td><?php echo $i.'-'.$i+1 ?> </td>                 
                <?php 
                if($fila["hora"]==$i){
                    if($fila["dia"]=='Lunes'){
                        ?><td bgcolor="yellow">&nbsp;</td><?php
                    }
                    else{ ?>
                <td>&nbsp;</td>
                <?php
                    }
                    if($fila["dia"]=='Martes'){
                        ?><td bgcolor="yellow">&nbsp;</td><?php
                    }
                    else{ ?>
                        <td>&nbsp;</td>
                        <?php
                            }
                    if($fila["dia"]=='Miercoles'){
                        ?><td bgcolor="yellow">&nbsp;</td><?php
                    }
                    else{ ?>
                        <td>&nbsp;</td>
                        <?php
                            }
                    if($fila["dia"]=='Jueves'){
                        ?><td bgcolor="yellow">&nbsp;</td><?php
                    }else{ ?>
                        <td>&nbsp;</td>
                        <?php
                            }
                    if($fila["dia"]=='Viernes'){
                        ?><td bgcolor="yellow">&nbsp;</td><?php
                    }else{ ?>
                        <td>&nbsp;</td>
                        <?php
                            }
                } else { ?>
                <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                <?php } ?>
            </tr>
        <?php } ?>  