<?php
$con = new mysqli("localhost","root","","procedencias");
if($con->connect_error)
{
    die("Conexion fallida ".$con->connect_error);
}
?>