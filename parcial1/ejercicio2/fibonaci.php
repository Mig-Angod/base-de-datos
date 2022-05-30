<?php
$n=$_GET["n"];
$fibonaci=array();
$fibonaci[0]=0;
$ant=0;
$ant1=1;
$fibonaci[1]=1;
for ($i = 2; $i <= $n ; $i++) {
    $fibonaci[$i]=$ant1+$ant;
    $ant=$ant1;
    $ant1=$fibonaci[$i];
}
for($i=0;$i<=$n;$i++){
    echo $fibonaci[$i];
}
?>