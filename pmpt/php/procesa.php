<?php
require("conexion.php");
require("../../config.php");

global $USER;
$usuario=$USER->id;
$modulo=$_SESSION["modulo"];


$conexion=new conexion;
$con=$conexion->conectar();


////////////////////////refrescar
$query=mysqli_query($con,"SELECT * FROM control_score c JOIN   recursos r ON c.idmodulo = r.idmodulo WHERE c.idusuario='$usuario' AND c.idmodulo='$modulo' ");
                           

   while($row=mysqli_fetch_array($query))
          {
                  
                   for ($i=1; $i <=$row['recursos'] ; $i++)
                    { 
                                    
                        $state=$row['r'.$i];
                         if($state=="ok")
                         {
                                         
                            echo " <span style='background-color: #8be956;' class='dot' onclick='currentSlide($i)'>$i</span> ";
                                
                          }else
                          {
                                         
                            echo "<span class='dot' onclick='currentSlide($i)'>$i</span> ";
                                         
                          }
                                
                                
                     }
                            
                            
          }




?>