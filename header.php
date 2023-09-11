<?php

$m=0;

echo <<<HTML
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>We Hotels - Experiencias inolvidables en destinos únicos de México</title>
   

  <meta content="We Hotels - Experiencias inolvidables en destinos únicos de México" name="title">
  <meta content="Bienvenido a We Hotels, donde creamos ambientes excepcionales en destinos icónicos de México. Disfruta de estancias inolvidables en nuestros hoteles y experimenta la verdadera hospitalidad. ¡Reserva ahora y vive la experiencia We!" name="description">
  <meta content="Keywords: hoteles, hotel, Mexico, CDMX, playas, Acapulco, aeropuerto, Puerto Morelos, reservaciones, hospedaje, cerca de aeropuerto, vacaciones en México." name="keywords">

  <link rel="apple-touch-icon" href="im/favicon.png" >
  <link rel="icon" href="im/favicon.png" >

<!--
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">
  -->
  <link href="fonts/icofont/icofont.min.css" rel="stylesheet">

<!--
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- <link href="webstyle.css?v=$r" rel="stylesheet"> -->

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>

  <link href="hotel-datepicker/css/hotel-datepicker.css" rel="stylesheet">
  <script src="hotel-datepicker/js/fecha.min.js"></script>
  <script src="hotel-datepicker/js/hotel-datepicker.min.js"></script>

      <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.core.min.css" rel="stylesheet" type="text/css">  
      
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js"></script>

      <script type="text/javascript" src="js/jquery.glide.js"></script>

  <style>
    * {
      font-size:1em;
    }

    body {
      font-family: 'Montserrat', sans-serif;
      font-weight:100;
      /*color:#002855;*/
      border:0;
      padding:0;
      margin:0;
    }
    html, body{
      width:100vw;
      height:100%;
    }
    body{
      overflow-x: hidden;
    }
    * {
      font-size:1em;
    }
    td{
      padding:0;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }

          * {
    margin: 0;
    padding: 0;
    border: 0;
    }


    div{position:relative; }

    .box {
          width: 100%;
          height: 100%;
          background-size: cover;
          background-position: center;
    }
    :root {
      --animate-duration: 1800ms;
      --animate-delay: 1.5s;
    }
    .sen-b{
      font-weight: 700;
    }
    .golden { color:#DEB666; }
    .wh {color:white;}
    -bk {color:black;}
    .bp, .bpw { position:relative; height:9vh; cursor:pointer; z-index:5;}
    p { line-height:1.4em;}
    b { font-weight:700;}
    a {text-decoration: none; color:inherit; cursor:pointer;}
    div { position:relative; 
    /*  overflow:hidden; */
    }
    .logo {height:3em; margin:1em 1em 1em 5em; vertical-align:middle;}
    .topMenu{
      width:100vw; background-color:#000; position:fixed; z-index:15; color:white;
    }

    .modal0 {
       filter: blur(2px); -webkit-filter: blur(2px); -moz-filter: blur(2px); -o-filter: blur(2px); -ms-filter: blur(2px);
    }
    #modal00 {
      display:none;
      -webkit-backdrop-filter: blur(5px);
      backdrop-filter: blur(5px);
    }
    #modal00{
      position:fixed;  width:100vw; height:100vh;background-color:rgba(240,240,240,0.5);z-index:19;
    }
    
  .boton1{
    background-color: #DEB666;
    color:white;
    padding:1em 2em;
    border-radius:2em;
    margin-top:0.6em;
    cursor:pointer;
    border:1px solid transparent;
  }
  
  .boton2{
    background-color:white;
    color:#DEB666 ;
    border: 1px solid #DEB666;
    padding:1em 2em;
    border-radius:2em;
    margin-top:0.6em;
    cursor:pointer;
  }
  
  .boton1:hover,.boton2:hover {
    background-color:silver;
    color:white ;
    border: 1px solid transparent;
  }

  .botonsm {
    font-size:0.9em;
    padding:0.5em 1.2em;
    margin-top:0.3em;
  }
  .thin { padding:0.3em 1em;  }

.flex1{
  display: flex; flex-flow: row wrap; justify-content:space-between;
}
.flex2{
  display: flex; flex-flow: column wrap; justify-content:space-between;
}

.title1{
  color: #DEB666;
  font-size:2em;
}
.title2{
  font-size:1.4em;
  color:silver;
}

p{
  margin-bottom:1.8em;
  margin-top:1.6em;
}

.icontable{
  vertical-align:top;
}
.icontable td {
  padding:0.5em 0.7em 0.5em 0em;
  vertical-align:top; 
}
.icontable  td:nth-child(2){
  padding-top:1em;
}
#Footer .icontable  td:nth-child(2){
  padding-top:0.6em;
}
.ic, .ic2{
  color: #DEB666;
  text-align: center;
  font-size:1.6em;
  width:1.4em;
  vertical-align:top;
}
.ic2{
  color:black;
}
#Footer .ic {
  color:silver;
  font-size:1.2em;
}
.fa-solid{
  margin-top:-5px;
}

img{
  align-self: center;
}


  .a10 {width:10%;} .a20 {width:20%;}
  .a30 {width:30%;} .a40 {width:40%;}
  .a50 {width:50%;} .a60 {width:60%;}
  .a70 {width:70%;} .a80 {width:80%;}

  .a15 {width:15%;} .a25 {width:25%;}
  .a35 {width:35%;} .a45 {width:45%;}
  .a55 {width:55%;} .a65 {width:65%;}
  .a75 {width:75%;} .a85 {width:85%;}
  @media only screen and (max-width: 600px) {
    .a10 {width:98%; margin-top:1em;} .a20 {width:98%; margin-top:1em;}
    .a30 {width:98%; margin-top:1em;} .a40 {width:98%; margin-top:1em;}
    .a50 {width:98%; margin-top:1em;} .a60 {width:98%; margin-top:1em;}
    .a70 {width:98%; margin-top:1em;} .a80 {width:98%; margin-top:1em;}

    .a15 {width:98%; margin-top:1em;} .a25 {width:98%; margin-top:1em;}
    .a35 {width:98%; margin-top:1em;} .a45 {width:98%; margin-top:1em;}
    .a55 {width:98%; margin-top:1em;} .a65 {width:98%; margin-top:1em;}
    .a75 {width:98%; margin-top:1em;} .a85 {width:98%; margin-top:1em;}
  }


.in-photo0 {
  position: absolute;
  bottom:3px;
  left:3px;
  width:100%;
  display:flex; flex-flow: row wrap; justify-content:flex-start;
  text-align: left;
  font-weight:100;
}
.in-photo {
  padding:0.3em 0.6em;
  font-size:0.7em;
  color:white;
}

  /* .goog-te-combo */



  #google_translate_element {
    background-color:transparent;
    color:white;
    text-align: right;
    position:fixed;
    z-index:200; right:-6em; top:1.8em;
    cursor:pointer;
    outline: none;
    -webkit-appearance: none;
  }
  #google_translate_element select{
   background-color:#000;
   -webkit-appearance:none;
   color:#fff;
   border: none;
   border-radius:3px;
   padding:6px 8px;
   outline: none;
 }
 .VIpgJd-ZVi9od-l4eHX-hSRGPd::before{
  display:none;
 }
 .VIpgJd-ZVi9od-l4eHX-hSRGPd{
  display: none;
 }
  .goog-logo-link{
    display:none !important;
   }
 .goog-te-gadget{
    color:transparent!important;
  }

  .flexContainer {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
    }
  .topMenuItem {
      display: block;
      padding: 0.3em 1.2em;
      margin:0.4em 1em;
      color: #eee;
      cursor: pointer;
      text-align: center;
      font-size:1.4em;
      border:0px solid silver;
    }
    
    

    .reservarTop {
      padding-top:0.2em; margin-top:-0.2em;
    }

    #deskMenu{ display:flex; } #mobileMenu{ display:none; }
    @media only screen and (max-width: 1200px) {
        #deskMenu{ display:none; } #mobileMenu{ display:block; }
        #google_translate_element {top:0;}
        .reservarTop {display:none;}
    }


/*
 | ------------------------------------------
 | Glide styles
 | ------------------------------------------
 | Here are slider styles
 | 
*/

.slider {
position: relative;
width: 100%;
height: 600px;
overflow: hidden;
}
.slides {
height: 100%;
/* Simple clear fix */
overflow: hidden;
/**
     * Here is CSS transitions 
     * responsible for slider animation in modern broswers
     */
-webkit-transition: all 500ms cubic-bezier(0.165, 0.840, 0.440, 1.000);
-moz-transition: all 500ms cubic-bezier(0.165, 0.840, 0.440, 1.000);
-ms-transition: all 500ms cubic-bezier(0.165, 0.840, 0.440, 1.000);
-o-transition: all 500ms cubic-bezier(0.165, 0.840, 0.440, 1.000);
transition: all 500ms cubic-bezier(0.165, 0.840, 0.440, 1.000);
}
.slide0 {
height: 100%;
float: left;
clear: none;
}
.slider-arrow {
position: absolute;
display: block;
margin-bottom: -20px;
padding: 20px;
}
.slider-arrow--right {
bottom: 50%;
right: 30px;
}
.slider-arrow--left {
bottom: 50%;
left: 30px;
}
.slider-nav {
position: absolute;
bottom: 100px;
}
.slider-nav__item {
width: 12px;
height: 12px;
float: left;
clear: none;
display: block;
margin: 0 5px;
background: #fff;
border-radius:50%;
}
.slider-nav__item:hover {
background: #ccc;
}
.slider-nav__item--current {
background: #ccc;
}


  </style>

</head>

<body>

  <!-- AIzaSyBlWFOB0UlL8T3i3C5dY1vj7YKygMJsGi8 -->
    <div id="google_translate_element"></div>
   <script type="text/javascript">
      function googleTranslateElementInit() {
         new google.translate.TranslateElement({
            pageLanguage: 'es', layout: 
            google.translate.TranslateElement.InlineLayout.HORIZONTAL, autoDisplay: 
            false, gaTrack: true, gaId: 'AIzaSyBlWFOB0UlL8T3i3C5dY1vj7YKygMJsGi8'
            }, 'google_translate_element');
         //  includedLanguages: 'fr,de,es',
      }
   </script>
   <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


      <!--topMenu start-->
      <div class="topMenu">



        <a href="./"><img data-aos="fade-right" src="im/We-hotels-logo.svg" class="logo"></a>

        <span style="float:right; margin-right:2em;font-weight: 300;font-size:0.7em; margin-top:2.3em;">
          
  <div id="deskMenu" class="flexContainer" style="text-align:center; right:14em; position:relative;">
      <a href="./"><div class="topMenuItem" >Inicio</div></a>
      <a href="nosotros"><div class="topMenuItem" >Nosotros</div></a>
      <a href="eventos"><div class="topMenuItem" >Eventos</div></a>
      <a href="contacto"><div class="topMenuItem" >Contacto</div></a>
      <a href=""><div class="topMenuItem" ><input type="button" class="reservarTop boton1 thin" value="Reservar Ahora" ></div></a>



  </div>
          
          &nbsp; &nbsp;  &nbsp;   &nbsp;    
          <a id="mobileMenu" onmouseup="$('#modal00').fadeIn();" style="cursor:pointer;">
            <img src="im/ic_hamburguesa.svg" style="width:2.4em; margin-right:3em; ">
          </a>
        </span>
            &nbsp; &nbsp;  
      </div>


      
      <!-------------------- topMenu end ---------------------->
HTML;

?>
