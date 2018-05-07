<?php

require("../php/conexion.php");

require("../../config.php");

session_start();

$_SESSION["modulo"]=1;
$conexion=new conexion;
$con=$conexion->conectar();


//echo "modulo-->".$_SESSION["modulo"];


?>

<!DOCTYPE html>
<html lang="es">

    <head>
      <meta charset="utf-8">

      <link rel="stylesheet" type="text/css" href="../css/flexboxgrid.min.css">
     <link rel="stylesheet" type="text/css" href="../css/estilos.css">
      
      <style>

      #page{
        /*background-color: blue;*/
      background-image: url(images/ambiente2_fondo_LCCS_modulo1.png);
      background-repeat: no-repeat;
      background-size: cover;
      background-size:100%;
      }

      #info{
        position: relative;
        top: -19px;
      }
      #info2{
        width: 60%;
        top: -20px;
      }

      @media only screen and (max-width: 600px) {
    

      #info{
        top:210px;
      }
      #info2{
        width: 100%;
        top:-31px
      }
      #slideIframe{
      
      padding-bottom: 26%;
      
      }

    }
     </style>
      
      <title>Modulo1</title>
      
      <link rel="stylesheet" href="css/craftyslide.css" />

      

      <script type="text/javascript">
       function cargue(){
       document.getElementById("page-navbar").style="display:none;";
       }
     </script>
     
    

    </head>

    <body onload="cargue()"  >

    
        

     <!-- <div id="contenedor1" align="center" style="padding-bottom: 781px;width: 100%    !important;
  height: auto   !important;">
          
          <p>Espacio informativoa</p>
          <br><br>
      
      <div id="slideshow">
        <ul>
          <li>
             <img src="https://marketingland.com/wp-content/ml-loads/2014/09/video-play-button-ss-1920.jpg" height="300px" alt="" />
          </li>
          
          <li>
          </li>
          
          <li>           
          </li>
          
          <li>           
          </li>
          
          <li>           
          </li>                          
        </ul>
      </div> 
      </div>-->

      
 <?php echo $OUTPUT->header(); ?>

    <!-- Contenido Principal -->
     
 <div class="row principal middle-xs between-xs reverse">
        <div class="col-xs-15">

          <div class="contenido" align="center" style="width: 106%; background-size: 100%;margin-left: -6%;">

           <div class="row center-xs">

                  <div class="col-xs-1">
                    <div class="medios">
                       <a class="title2" href="../../contacto.php" target="_blank" ><img src="../images/icono_hablemos2_lccs.png" /><span>Hablemos</span></a>
                              <a class="title2" href="#" ><img src="../images/icono_descarga1_lccs.png" /><span>Descarga</span></a>
                               <a class="title2" href="http://lascosascomoson.com.co/moodle/mod/forum/view.php?id=11" target="_blank"><img src="../images/icono_glosario1_lccs.png"/><span>Foro</span></a>

                    </div>
                  </div>


                   <div class="col-xs-7">
  
                        <div id="info" class="info" >
                          <strong><h5 align="center">ME CUIDO, TE CUIDO, NOS CUIDAMOS.</h5></strong>
                     
                           <p align="justify" style="font-family:Roboto;">En este módulo podrás Identificar los mitos de sexualidad y estereotipos de género aprendidos para reconocer cómo han influenciado positiva o negativamente en la vida   a través de la transformación de estas creencias y la toma de decisiones de manera asertiva. 
                           </br></br> </br> </br> </br> </br> 
                            </br></br> </br> </br> </br> </br> 
                            </br></br> </br> </br> 
                          </p>
                        </div>
                            
                              <div id="info2" class="info2" ><p align="justify" style="font-family:Roboto; position: relative;">También, podrás replantear las enseñanzas recibidas frente a quién le corresponde la protección en la vida sexual, para aplicarlo en la vida de pareja de adolescentes a través del sexo seguro, protección compartida y la participación del hombre en la prevención del embarazo.</p></div>
                           
                             

                           
                            <!--<div class="col-xs-5">
                                    <div class="img1">
                                      <br> <br> <br> <br>
                                    <img style="width:100px;" src="images/Grafico2_modulo1.png"/>
                                   
                                    </div>
                            </div>-->

                         <!--<img style="width: 400px; margin-left: 63%;top: -91px;position: relative;"  src="images/Grafico1_modulo1.png"/>-->
                          
                           <!--<p align="justify" style="width:60%" style="font-family:Roboto;">También, podrás replantear las enseñanzas recibidas frente a quién le corresponde la protección en la vida sexual, para aplicarlo en la vida de pareja de adolescentes a través del sexo seguro, protección compartida y la participación del hombre en la prevención del embarazo. </p>-->

                             <!--<img style="width:300px;margin-left: 64%;top:-90px;position: relative;" src="images/Grafico3_modulo1.png"/>-->
                         <!--<br> <br> <br> <br> -->
                       
                            </br></br> </br> 
                            
                        
                     

                  </div>
          </div>
              <!--
                   <div class="col-xs-8 ">
                     <div class="sidebar">
                            <!--iframe src="slide.html"  ></iframe
                            contenido
                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                      </div>
                      
                  </div>-->

                  <br><br><br>
                             
                            
                 <div class="row center-xs">  
                    <div class="col-xs-12">
                        <div id="slideIframe" class="slideIframe">
                            <!--start
                             <br><br><br><br><br><br><br><br><br><br><br><br><br><br>-->

                               <iframe width="910" height="900" class="slide" src="../php/slide.php"  frameborder="0" allowfullscreen  scrolling="no"></iframe>

                             
                       <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                       <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                               
                               
                              
                            
                        </div>
                    </div>
                </div>
              

             

            <!--<h2>Contenido</h2>-->
          <br><br><br>
          <br><br><br>
            
          </div>
        </div>

      </div>

      <footer class="row">
        <div class="col-xs-12">
          <div class="footer">
           
     <?php echo $OUTPUT->footer(); ?>
          
          </div>
        </div>
      </footer>


      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
      <script src="js/craftyslide.min.js"></script>
      
      <script>
        $("#slideshow").craftyslide();
      </script> 
    </body>
</html>


