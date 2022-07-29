<?php session_start();
include("conexion.php");
$correoelectronico = $_POST['correoelectronico'];
$password=$_POST['password'];
$sql="SELECT id,correoelectronico,nombrecompleto,celular,nivel FROM usuario WHERE correoelectronico='$correoelectronico' AND password=sha1('$password')";
//echo $sql;
$consulta=mysqli_query($con,$sql);
$filas=mysqli_num_rows($consulta);
if(mysqli_num_rows($consulta)>0){
    echo json_encode(array('success'=> 1));
}else{
  echo json_encode(array('success'=> 0));
}
if($filas>0){
    $fila=mysqli_fetch_array($consulta);
    $_SESSION['correoelectronico']=$correoelectronico;
    $_SESSION['nombrecompleto']=$fila['nombrecompleto'];
    $_SESSION['celular']=$fila['celular'];
    $_SESSION['nivel']=$fila['nivel'];
    $respuesta=["exito"=>"1",
    "nombrecompleto"=>$fila['nombrecompleto'],
    "celular"=>$fila['celular'],
    "nivel"=>$fila['nivel']];
    $json = json_encode($respuesta);
    //print_r($json);
   // echo json_encode('hola');
}
else
{
    $respuesta=[
        "exito"=>"0",
        "mensaje"=>"Usuario o contraseña incorrectos"
    ];
    $json = json_encode($respuesta);
    //print_r($json);
}
?>