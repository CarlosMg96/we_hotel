<?php

$dispCerrar = "none";
if (!empty($aid)){
  $dispCerrar = "inline";
}

echo <<<HTML
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>We hotels</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

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

  <link href="hotel-datepicker/css/hotel-datepicker.css" rel="stylesheet">
  <script src="hotel-datepicker/js/fecha.min.js"></script>
  <script src="hotel-datepicker/js/hotel-datepicker.min.js"></script>

  

      <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.core.min.css" rel="stylesheet" type="text/css">  
      
          

      
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js"></script>

      <script type="text/javascript" src="js/jquery.glide.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
HTML;

require_once "admin-css.php";

echo <<<HTML

  <script src="./dropzone/dropzone5.min.js?v=8"></script>
  <link href="./dropzone/dropzone.css" rel="stylesheet">

</head>

<body>

<div id="modal001" class="flex1">
  <div id="modal01" class="flex1">
    <img src="im/loading1.gif" style="position:relative; margin:auto;">
  </div>
</div>


      <!--topMenu start-->
      <div class="topMenu">
        <a href="./"><img data-aos="fade-right" src="im/We-hotels-logo.svg" class="logo"></a>

        <span style="float:right; margin-right:2em;font-weight: 300;font-size:0.7em; margin-top:2em;">
          
            <a onmouseup="goto('admin-main')">
            ADMIN
            </a>
            &nbsp;
            <form method=post style="display: $dispCerrar;">
              <input type=hidden name=cerrarsesion value=1>
              <input type=submit value="cerrar" style='cursor:pointer; font-size:1.2em;color:#DEB666; background-color: transparent; border:0;'> 
            </form>
            </a>
          
          &nbsp; &nbsp;  &nbsp;   &nbsp;    
          <a onmouseup="$('#modal00').fadeIn();" style="cursor:pointer;">
            <img src="im/ic_hamburguesa.svg" style="width:1.8em; margin-right:5em;">
          </a>
        </span>
            &nbsp; &nbsp;  

<div>
  <ul class="topnav">
    <li><a onmouseup="goto('admin-habitaciones')">Habitaciones</a></li>
    <li><a onmouseup="goto('admin-eventos')">Eventos</a></li>
    <li><a onmouseup="goto('admin-atracciones')">Atracciones</a></li>
  </ul>
</div>
      </div>
      
      <!-------------------- topMenu end ---------------------->
HTML;


echo <<<HTML

<div style="width:100vw;height:110px; "></div>

<div style="width:80vw;margin-left: 10%;">
  <h1 class=title1>We Hotels Admin</h1>
</div>

HTML;

?>
