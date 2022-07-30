<?php
$numero=$_GET['numero'];
?>
<table table BORDER="10" CELLPADDING="0" CELLSPACING="0" >
        <tr bgcolor="#3f90a4">
            <th>Imagen</th>
            <th>Nombres Apellidos</th>
            <?php for($i=0,$i<=$numero;$i++){?>
                <th>&nbsp;</th>
                <?php }?>
        </tr>
        <tr>
            <td></td>
        </tr>
    </table>