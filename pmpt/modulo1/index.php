<?php


require("../../config.php");




?>
<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    
    <link rel="stylesheet" type="text/css" href="../css/flexboxgrid.min.css">
     <link rel="stylesheet" type="text/css" href="../css/estilos.css">
      
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Roboto:400|Lato:300,400' rel='stylesheet' type='text/css'>
    
    
    
  <title></title>
  
  <style type="text/css">
  
    #btniniciar{
    
      width: 95px;
      height: 96px;
      background-image: url(../../../login_plataforma/images/boton_iniciar_ambiente1_lccs.png);
      /*background-size:100%;*/
      cursor: pointer;
     /* color:transparent;*/
     background-color: transparent;

     
     }
     
     
     .title { position: relative;
	z-index: 0;
	}
	.title:hover { background-color: transparent;
	z-index: 1;
	}
	.title span { 
	padding: 5px;
	position: absolute;
	text-decoration: none;
	background-color: yellow;
	color: black;
	width: 6em;
	text-align: center;
	visibility: hidden;
	font-size: 0.7em;
	/*line-height: 10px;*/
	}
	.title:hover span { visibility: visible;
	top: 24px;
	left: 25px;
	}
  
  </style>
  
  <script type="text/javascript">
       function cargue(){
       document.getElementById("page-navbar").style="display:none;";
       }
 </script>
  

</head>
<body onload="cargue()">
    
    <!--<div id="contenedor1" align="center">
        
        <div id="video" style="padding-bottom: 84px; width: 100%    !important;
  height: auto   !important;" >
            
             <iframe   src="https://www.youtube.com/embed/"></iframe>
             
        </div>
    
    
         
      
      <img src="icono_modulo1.png" align="left" style="padding-bottom: 40%;"/>
      
        <div id="informacion" style="position:relative; width: 61%    !important;
  height: auto   !important;padding-bottom:90px;left:30px">
            
            
            
            <strong><h5 align="left">ME CUIDO, TE CUIDO, NOS CUIDAMOS.</h5></strong>
            
            <p align="justify" style="font-family:Roboto">En este módulo podrás Identificar los mitos de sexualidad y estereotipos de género aprendidos para reconocer cómo han influenciado positiva o negativamente en la vida   a través de la transformación de estas creencias y la toma de decisiones de manera asertiva. </br> También, podrás replantear las enseñanzas recibidas frente a quién le corresponde la protección en la vida sexual, para aplicarlo en la vida de pareja de adolescentes a través del sexo seguro, protección compartida y la participación del hombre en la prevención del embarazo. </p>
        </div>
          
      <button id="btniniciar" onclick="window.location.href='modulo1.php' " name="" value=""/>
      
    </div>-->

     <?php echo $OUTPUT->header(); ?>

 <div class="container">


     <!--<header class="row">
        <div class="col-xs-12">
          <div class="header">
            
            <?php //echo $OUTPUT->header(); ?>
            header
          </div>
        </div>
      </header>-->


    <!-- Contenido Principal -->
       <div class="col-xs-12 col-md-2">
            <div class="sidebar1">
             <!--<h3>Sidebar 1</h3>-->
             <a class="title" href="../../contacto.php" target="_blank" ><img src="../images/icono_hablemos1_lccs.png" /><span>Hablemos</span></a>
               <br><br><br>

            </div>
        </div>
      <div class="row principal middle-xs between-xs ">

           <!--<div class="col-xs-1 col-md-1 col-sm-1">
                <div class="sidebar1"  style="margin-left: -152px;">
                    <br><br><br>
                    <br><br><br>
                    <br><br><br>
                    
      
                  <img src="images/icono_modulo1.png" align="left" style="padding-bottom: 40%;" />
                   <br><br><br>
                  
                </div>
          </div>-->

       

          <div class="col-xs-12 col-md-8">

            <div class="contenido-p">

               

                   <!--<iframe src="http://lascosascomoson.com.co/moodle/mod/hvp/embed.php?id=5" width="1138" height="673" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="http://lascosascomoson.com.co/moodle/mod/hvp/library/js/h5p-resizer.js" charset="UTF-8"></script>-->
                     <iframe width="100%" height="315" frameborder="0" allowfullscreen="" 
                        src="https://www.youtube.com/embed/CuguwlD6seY?rel=0">
                        </iframe>
    
                <br><br><br>
                  
                 
                <strong><h5 align="left">ME CUIDO, TE CUIDO, NOS CUIDAMOS.</h5></strong>
    
                 <p align="justify" style="font-family:Roboto">En este módulo podrás Identificar los mitos de sexualidad y estereotipos de género aprendidos para reconocer cómo han influenciado positiva o negativamente en la vida   a través de la transformación de estas creencias y la toma de decisiones de manera asertiva. </br> </br> </br> También, podrás replantear las enseñanzas recibidas frente a quién le corresponde la protección en la vida sexual, para aplicarlo en la vida de pareja de adolescentes a través del sexo seguro, protección compartida y la participación del hombre en la prevención del embarazo. </p>
    
                 <br><br><br>
    
                   <div align="center">
                   <button id="btniniciar" onclick="window.location.href='modulo1.php' " name="" value="" />
                   </div>


             </div>
          </div>

          <!-- <div class="col-xs-12 col-md-2">
            <div class="sidebar2">
              <h3>Sidebar 2</h3>
              

                <a href="www.googlr.cm" alt="chat" >aside</a>
                
         
            </div>
          </div>-->



      </div>

      <footer class="row">
        <div class="col-xs-12">
          <div class="footer">
           
     <?php echo $OUTPUT->footer(); ?>
          footer
          </div>
        </div>
      </footer>

  </div>
  
  

</body>
</html>