<?php

require("../../config.php");

global $USER;
$usuario=$USER->id;



?>



<!DOCTYPE html>
<html>
<head>
<script src="../js/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/flexboxgrid.min.css">
<!--<link rel="stylesheet" type="text/css" href="../css/estilos.css">-->
<style>
* {box-sizing: border-box}

h1,h2,h3,h4,h5,h6 {
  margin: 0; padding: 10px;
}

.atras{
 
   right: 52%;
   position: absolute;
   font-size: 40px;
   padding-left: 59px;
   color:transparent;
   cursor: pointer;
   background-image: url(../images/icono_atras_contenedor_lccs.png);
   transition: 0.6s ease;
   border-radius: 0 3px 3px 0;

}

.siguiente{
   
  position: absolute;
  font-size: 40px;
  padding-left: 18px;
  color:transparent;
  cursor: pointer;
  background-image: url(../images/icono_siguiente_contenedor_lccs.png);
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;

}

.principal {
  margin-top: 0px;
  margin-bottom: 0px;
  justify-content: center;
}


body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 170%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;

  background-image: url(../images/icono_atras_contenedor_lccs.png);

  padding-left: 146px;
    padding-top: 34px;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;

  background-image: url(../images/icono_siguiente_contenedor_lccs.png);
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 30px;
  width: 30px;
  margin: 0 2px;
  background-color: yellow;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
 /* background-color: #8be956;*/
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size 
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}*/


</style>
</head>
<body>
    

<div class="container">
     


    <!-- Contenido Principal -->
      <div class="row principal middle-xs between-xs ">
       

        <div class="row center-xs col-xs-12">
          <div class="contenido1">
            
                <div class="slideshow-container">
                    <div class="mySlides fade">
                     <div class="numbertext">1 / 3</div>
                      <img src="../modulo1/images/Imagen 1.png" style="width:100%">
                      
                    </div>
                    
                    <div class="mySlides fade">
                     
                      <img src="../modulo1/images/Recurso 1.gif" style="width:100%">
                     
                    </div>
                    
                    <div class="mySlides fade">
                     
                      <img src="../modulo1/images/Recurso 1.2.gif" style="width:100%">
                      
                    </div>

                      <div class="mySlides fade">
      
                          <img src="../modulo1/images/Recurso 2.1.png" style="width:100%">    

                   
                    </div>

                      <div class="mySlides fade">
                   
                         
                        <img src="../modulo1/images/Recurso 2.png" style="width:100%">

                   
                    </div>
                    
                    <div class="mySlides fade">
                      
                      <!--<img src="../modulo1/images/Recurso 2.png" style="width:100%">-->

                       <!-- <div class="row center-xs">
                            
                             <div class="col-xs-12 ">
                                <div class="sidebar1" style="width:130%;margin-left: -7%;">
                             <iframe width="100%" height="515" frameborder="0" allowfullscreen=""  scrolling="yes"
                        src="../modulo1/recursos/Recurso2_responsive/index.html">
                           </iframe>
                                    
                                 </div>
                             </div>
                        </div>-->
                         <iframe width="100%" height="450" frameborder="0" allowfullscreen=""  
                        src="../modulo1/recursos/Recurso2_responsive/index.html">
                           </iframe>            

                   
                    </div>
                    
                    <div class="mySlides fade">
                      
                     <!-- <img src="../modulo1/images/Recurso 2.1.png" style="width:100%">-->
                     <img src="../modulo1/images/Recurso 3.gif" style="width:100%">
                      <div class="text"> </div>
                    </div>
                    
                    <div class="mySlides fade">
                      
                      <!--<img src="../modulo1/images/Recurso 2.2.png" style="width:100%">-->
                      
                      
                      <!--<iframe width="910" height="515" frameborder="0" allowfullscreen="" 
                        src="../modulo1/recursos/Recurso2_draganddrop/index.html">
                        </iframe>-->
                       <!-- <div class="row center-xs">
                            
                             <div class="col-xs-12 ">
                                <div class="sidebar1" style="width:130%;margin-left: -7%;">
                                   <iframe width="100%" height="515" frameborder="0" allowfullscreen=""  scrolling="yes"
                        src="../modulo1/recursos/Recurso2_draganddrop/index.html">
                        </iframe>
                             
                                    
                                 </div>
                             </div>
                        </div>-->

                          <iframe width="100%" height="450" frameborder="0" allowfullscreen="" 
                        src="../modulo1/recursos/Recurso4/index.html">
                           </iframe>
                     
                    </div>
                    
                    <div class="mySlides fade">
                      
                      <!--<img src="../modulo1/images/Recurso 3.gif" style="width:100%">-->
                       <img src="../modulo1/images/Recurso 5.gif" style="width:100%">
                     
                    </div>
                    
                    <div class="mySlides fade">
                      
                      <!--<img src="../modulo1/images/Recurso 5.gif" style="width:100%">-->
                      <a href="http://lascosascomoson.com.co/moodle/mod/forum/view.php?id=7" target="_blank"><img src="../modulo1/images/imagen2_LCCS-01.png" style="width:100%">
                        </a>
                     
                    </div>
                    
                    <div class="mySlides fade">

           
                      <!--<img src="../modulo1/images/imagen2_LCCS-01.png" style="width:100%">-->
                          <iframe width="100%" height="450" frameborder="0" allowfullscreen="" 
                        src="../modulo1/recursos/recurso6/index.html">
                           </iframe>
              
                    </div>
                    
                    <div class="mySlides fade">
                      
                      <!--<img src="../modulo1/images/Recurso 6.png" style="width:100%">-->

                       <iframe width="100%" height="450" frameborder="0" allowfullscreen="" 
                        src="https://www.youtube.com/embed/RYHUEzBiTEU?rel=0">
                        </iframe> 
                 
                    </div>
                    
                    <div class="mySlides fade">
                      
                       <a href="http://lascosascomoson.com.co/moodle/mod/forum/view.php?id=8" target="_blank"><img src="../modulo1/images/imagen3_.png" style="width:100%"></a>
                     
                    </div>
                    
                    <div class="mySlides fade">
                  
                      <img src="../modulo1/images/recurso 7.1.png" style="width:100%">
                      
           
                    </div>
                    
                    <div class="mySlides fade">
                      
               
                      <img src="../modulo1/images/Recurso 7.2.png" style="width:100%">
                  
                    </div>
                    <div class="mySlides fade">
                       <a href="http://lascosascomoson.com.co/moodle/mod/forum/view.php?id=10" target="_blank">
                      <img src="../modulo1/images/imagen4_LCCS-01.png" style="width:100%">
                       </a>
                  
                    </div>

                     <div class="mySlides fade">
                      
                     
                       <iframe width="100%" height="450" frameborder="0" allowfullscreen="" 
                        src="https://www.youtube.com/embed/kR-aRjZltpQ?rel=0">

                        </iframe>
                    
                    </div>
                    
                    <div class="mySlides fade">
                      
                     
                        <iframe width="100%" height="450" frameborder="0" allowfullscreen="" 
                        src="https://www.youtube.com/embed/LaKiN-dUsw4?rel=0">
                        </iframe>
                    
                    </div>
                    
                    <div class="mySlides fade">
                      
                     
                        <iframe width="100%" height="450" frameborder="0" allowfullscreen="" 
                        src="https://www.youtube.com/embed/Gt5d807Ob6k?rel=0">
                        </iframe>
                    
                    
                    </div>
                    
                    <div class="mySlides fade">
                      
                      <a href="http://lascosascomoson.com.co/moodle/mod/forum/view.php?id=9" target="_blank">
                        <img src="../modulo1/images/imagen5.png" style="width:100%"></a>
                      
                    </div>

                     <div class="mySlides fade">
                           
                        <iframe width="100%" height="450" frameborder="0" allowfullscreen="" 
                        src="https://www.youtube.com/embed/SbjZy3FPRHQ?rel=0">
                        </iframe>
                    
                     
                    </div>
                
                   
                
                </div>
             <br>
                
                
                <div style="text-align:center">
              
            
                    
                 <div id="midiv"></div>
                    
                  <!--<span style=" background-color: #8be956;" class="dot" onclick="currentSlide(1)">1</span> 
                  <span style=" background-color: #8be956;" class="dot" onclick="currentSlide(2)">2</span> 
                  <span style=" background-color: #8be956;"  class="dot" onclick="currentSlide(3)">3</span> 
                  <span class="dot" onclick="currentSlide(4)">4</span> 
                  <span class="dot" onclick="currentSlide(5)">5</span>
                  <span class="dot" onclick="currentSlide(6)">6</span>
                  <span class="dot" onclick="currentSlide(7)">7</span>
                  <span class="dot" onclick="currentSlide(8)">8</span>
                  <span class="dot" onclick="currentSlide(9)">9</span>
                  <span class="dot" onclick="currentSlide(10)">10</span>
                  <span class="dot" onclick="currentSlide(11)">11</span>
                   <span class="dot" onclick="currentSlide(12)">12</span>
                   <span class="dot" onclick="currentSlide(13)">13</span>
                   <span class="dot" onclick="currentSlide(14)">14</span>
                   <span class="dot" onclick="currentSlide(15)">15</span>
                   <span class="dot" onclick="currentSlide(16)">16</span>-->
                </div>
            
             
          </div>
        </div>
        
         <div class="col-xs-5">
          <div class="sidebar1">
            
            <!-- <a class="prev" onclick="plusSlides(-1)"></a>-->
            <br>
            <br>
            <a class="atras"  onclick="plusSlides(-1)">atras</a>
                           
          </div>
        </div>

        <div class="col-xs-5">
          <div class="sidebar2">
           
             <!--<a class="next" onclick="plusSlides(1)"></a>-->
             <br>
            <br>
             <a class="siguiente" onclick="plusSlides(1)">siguien</a>
          </div>
        </div>
        
      </div>

</div>



<script>
var slideIndex = 1;
showSlides(slideIndex);

var param1;

//showSlides2(slideIndex);



function plusSlides(n) {

  showSlides(slideIndex += n);
  param1=1;

 //showSlides2(slideIndex += n);
}

function currentSlide(n) {

  showSlides(slideIndex = n);
  param1=1;
 // showSlides2(slideIndex = n);
}

function getAjax(){
// alert("refrescar");

 var conexion;

if(window.XMLHttpRequest){
	conexion=new XMLHttpRequest();
}else{
	conexion=new ActiveXObject("Microsoft.XMLHTTP");
}
 conexion.onreadystatechange=function()
 {

    if (conexion.readyState==4 && conexion.status==200)
    {
    document.getElementById("midiv").innerHTML=conexion.responseText;
    }
 }

conexion.open("GET","procesa.php?variable=hola",true);
conexion.send();
    
}


function showSlides(n) {

//alert("slide "+n);

//setTimeout(hola, 5000);

 $.ajax({
        url: 'procesa_form.php',
        type: 'POST',
        dataType: 'text',
        data: {
            slide   : n
            
          }
      }).done(function(respuesta) {
        
        
      //   alert(respuesta); 
        //refrescar 
         getAjax();
         
        
        //recurso actual
                $.ajax({
                url: 'actual.php',
                type: 'POST'
                        
              }).done(function(res) {
                
              //  alert("respuesta de actual  "+res+" y param1 ->"+param1);

                
                if(res!=='' & param1==null){
                //  alert("es diferente a null");
                  var num= parseInt(res);
      
                   showSlides2(slideIndex = num);
                }
              
              });
       



          

              
       // console.log("satisfactorio");
      });


  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}



function showSlides2(n){
// alert("slide2--> "+n);


  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";


}


</script>



</body>
</html> 


