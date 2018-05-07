<?php

error_reporting(0);
require("conexion.php");
require("../../config.php");

global $USER;
$usuario=$USER->id;
$modulo=$_SESSION["modulo"];


$conexion=new conexion;
$con=$conexion->conectar();



$query=mysqli_query($con,"SELECT * FROM seguimiento_score WHERE idusuario='$usuario' AND idmodulo='$modulo' order by id DESC limit 1");

$resultado=mysqli_fetch_array($query);
$ultimo_r=$resultado['recurso'];
echo $ultimo_r;





//echo("<script type='text/javascript'>  currentSlide(4);</script>"); 	

?>