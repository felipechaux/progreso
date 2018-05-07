<?php
error_reporting(0);
require("conexion.php");
require("../../config.php");

global $USER;
$usuario=$USER->id;
$modulo=$_SESSION["modulo"];


$conexion=new conexion;
$con=$conexion->conectar();

$slide = $_POST[slide];
	
	


//echo "ajax form".$slide." modulo".$modulo." user".$usuario;

$query_validacion=mysqli_query($con,"SELECT * FROM control_score WHERE idusuario='$usuario' AND  idmodulo='$modulo' ");

 if(mysqli_num_rows($query_validacion)==0){
     
      $INSERT1="INSERT INTO control_score(id,idusuario,idmodulo, r1) VALUES(NULL, $usuario, $modulo, 'ok')";

        if($con->query($INSERT1)===TRUE){
          echo "insert data";
        }else{
        	echo "failed";
        }
     
 }
 else{
     
     if($slide!=1){
         
         echo "slide es diferente a 1 UPDATE!!! slide--> ".$slide."   -->";
         $UPDATE=mysqli_query($con,"UPDATE control_score SET r$slide='ok' WHERE idusuario='$usuario' AND  idmodulo='$modulo' ");

           if($UPDATE){
          echo "update  data";

                     $query_validacion2=mysqli_query($con,"SELECT * FROM seguimiento_score WHERE idusuario='$usuario' AND  idmodulo='$modulo' AND recurso='$slide' ");

                     if(mysqli_num_rows($query_validacion2)==0){
                         
                                 $INSERT2="INSERT INTO seguimiento_score(id,idusuario,idmodulo,recurso) VALUES(NULL, $usuario, $modulo, $slide)";

                          if($con->query($INSERT2)===TRUE){
                            echo "insert2 data";
                          }else{
                            echo "failed2";
                          }
                         
                     }



          ///insert
        }else{
          echo "failed";
        }
     }
     
 }
	
	

	

?>