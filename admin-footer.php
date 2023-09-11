<?php

echo <<<HTML

  <!--  -----------------------------------------------------------------------------  -->


<style>
  .a35 {width:35%;}
  .a45 {width:45%;}
  .a51 {width:51%;}
  @media only screen and (max-width: 600px) {
    .a35 {width:90%; margin-top:2em}
    .a45 {width:90%; margin-top:2em}
    .a51 {width:90%; margin-top:2em}
  }
</style>

  <!--  -----------------------------  footer start  ----------------------------------  -->

  <div style="width: 100%; height:20px"></div>
  <div id="Footer" style="position:relative; width:100%; background-color:#202020; color:silver">
      <div style="width: 100%; height:30px;"></div>
      <div style="width:80%; margin-left:10%">
        <div class="flex1" style="align-items: flex-start;">

          <div class="a35 flex1" style="position:relative;">

            <div class="a45 flex1" style="align-items: center; ">
              <img src="im/logo-we.png" style="width:150px; height:124px">
              <br><br>
            </div>

            <div class="a51 flex1" style="font-size:1em; overflow:visible;">
              <table class="icontable" style="font-size:0.9em; line-height:1.5em">
                <tr>
                  <td class="ic"><i class="fa-solid fa-location-dot"></i></td>
                  <td>Acapulco<br>Aeropuerto<br>Puerto Morelos</td>
                </tr>
                <tr>
                  <td style='width:10%' class="ic"><i class="fa-solid fa-phone"></i></td>
                  <td>Acapulco: 
                    <br><a href="tel:+52 74 4485 - 1387">
                    <b>74 4485 - 1387</b>
                    </a>
                    <br>Aeropuerto:
                    <br><a href="tel:+52 55 5133 3232">
                    <b>55 5133 3232</b>
                    </a>
                    <br>Puerto Morelos: 
                    <br><a href="tel:+52 998 313 0227">
                    <b>998 313 0227</b>
                    </a>
                  </td>
                </tr>
                
                <tr>
                  
                  <td class="ic"><i class="fa-solid fa-envelope"></i></td>
                  <td>
                    <a href="mailto:reservaciones@wehotel.com.mx">
                      reservaciones@wehotel.com.mx
                    </a>
                  </td>

                </tr>
                
                
              </table> 

            </div>
          </div>

          <div style="width:15%">
            <a href="./">Inicio</a>
            <br><br> <a href="nosotros">Nosotros</a>
            <br><br> Reservaciones
            <br><br> Eventos
            <br><br> Conatcto
          </div>
          <div class="a35">

            <div class="flex1">

              <div style="width:57%">
                <table class="icontable" style="font-size:0.9em; line-height:1.2em">
                  <tr onmouseup="Politicas()" style="cursor:pointer;">
                    <td class="ic"><i class="fa-solid fa-pen-nib"></i></td>
                    <td>Términos y condiciones</td>
                  </tr>
                  <tr onmouseup="Aviso()" style="cursor:pointer;">
                    <td class="ic"><i class="fa-solid fa-file"></i></td>
                    <td>Aviso de privacidad</td>
                  </tr>
                  <tr onmouseup="window.location='codigo-de-etica';" style="cursor:pointer">
                    <td class="ic"><i class="fa-solid fa-heart"></i></td>
                    
                    <td>Código de Ética</td>
                    
                  </tr>
                </table>
              </div>

              <div  
              style="width:40%; border: 0px solid orange; align-items: flex-start; justify-content: flex-start;">
                <br>
                <div class="flex1" style="width:100%;  font-size:1.4em; color:white">
                  <b>Stay Close</b>
                </div>
                <br>
                <div class="flex1" style="width:100%;  border: 0px solid cyan; ">
                  <img src="im/ic-fb.png" style="height:26px">
                  <img src="im/ic-insta.png" style="height:26px">
                  <img src="im/ic-trip.png" style="height:26px">
                </div>
              </div>

            </div>

            <div class="flex1">
              <img src="im/logo-we-uniq.png" style="width:20%; margin-top:1em;">
              <img src="im/logo-we-hotels.png" style="width:20%; margin-top:1em;">
              <img src="im/logo-we-express.png" style="width:20%; margin-top:1em;">
            </div>
          </div>

        </div>
      </div>
      <div style="width: 100%; height:30px;"></div>
  </div>
  <div style="width: 100%; background-color:#1a1a1a; text-align:center;padding:1em auto; color:silver">
    <div style="width: 100%; height:20px;"></div>
      &copy; 2023. Todos los derechos reservados
    <div style="width: 100%; height:30px;"></div>
  </div>


  <!--  -----------------------------  footer end  ----------------------------------  -->

  <!--  -----------------------------------------------------------------------------  -->


  <!-- modal00 start -->
  <div id="modal00"  onmouseup="$('#modal00').fadeOut();">
  
    <div onmouseup="event.stopPropagation();" style="width:300px; right:0; top:0; position:fixed; background-color: #222222 ; padding:0.7em; z-index:11;">

        <a style="float:right; cursor:pointer; font-size:2em" onmouseup="$('#modal00').fadeOut();">
        <i class="icofont-close" style="color:white"></i></a>
        <br>

        <div style="width:90%; margin-left:10%; color:silver">
            <img src="im/We.png" style="width:40px;margin-bottom: 20px;">
            <hr style="border-top:1px solid silver; width:70%">
            <a href="./">
              <br><br> Inicio 
            </a>
            <a href="nosotros">
              <br><br> Nosotros
            </a>
            <br><br> Reservaciones
            <br><br> Eventos
            <a href="contacto">
              <br><br> Conatcto
            </a>
            <hr>
            <span style="color:#DEB666">
            <a href="acapulco">
              <br><br> Acapulco
            </a>
            <a href="aeropuerto">
              <br><br> Aeropuerto
            </a>
            <a href="puertomorelos">
            <br><br> Puerto Morelos
            </a>

            </span>
            <br><br> <br><br> 
          </div>
      </div>  
  </div>
  
  <!-- modal00 end -->

  <!-- modal00 start -->

  <div id="emptyModal0"  onmouseup="$('#emptyModal0').fadeOut();" style="display:none; position:fixed;top:0;
  left:0;width:100vw; height:100vh; background-color:rgba(0,0,0,0.5);  z-index:100;">

  <div id="emptyModal"  style="position:fixed;top:2em;
  left:4vw;width:88vw;padding:2em auto; background-color:white; border-radius:0.5em; z-index:120; box-shadow: 1px -1px 15px 0px rgba(0,0,0,0.55);">
  
    <div onmouseup="event.stopPropagation();" style="position:relative; background-color: white ; padding:0.7em; z-index:11;">

        <a style="float:right; cursor:pointer; font-size:2em" onmouseup="$('#emptyModal0').fadeOut();">
          <i class="fa-solid fa-xmark"></i>
        </a>
        <br>
    </div>  
      <div id="emptyContent" onmouseup="event.stopPropagation();" style="width:90%; margin-left:5%;height:80vh; overflow-y: scroll;">
      </div>
      <br><br>
  </div>
  </div>
  
  <!-- modal00 end -->


  <!-- modal00 start -->

  <div id="emptyModal0"  onmouseup="$('#emptyModal0').fadeOut();" style="display:none; position:fixed;top:0;
  left:0;width:100vw; height:100vh; background-color:rgba(0,0,0,0.5);  z-index:100;">

  <div id="emptyModal"  style="position:fixed;top:2em;
  left:4vw;width:88vw;padding:2em auto; background-color:white; border-radius:0.5em; z-index:120; box-shadow: 1px -1px 15px 0px rgba(0,0,0,0.55);">
  
    <div onmouseup="event.stopPropagation();" style="position:relative; background-color: white ; padding:0.7em; z-index:11;">

        <a style="float:right; cursor:pointer; font-size:2em" onmouseup="$('#emptyModal0').fadeOut();">
          <i class="fa-solid fa-xmark"></i>
        </a>
        <br>
    </div>  
      <div id="emptyContent" onmouseup="event.stopPropagation();" style="width:90%; margin-left:5%;height:80vh; overflow-y: scroll;">
      </div>
      <br><br>
  </div>
  </div>
  
  <!-- modal00 end -->
  <!--<div style="position:relative;width:100%; height:calc(200vh - 60px);"></div>-->

  <!-- footer start-->


<form id="gotoForm" method="post" action="./admin" style="display:none;">
  <input type="text" name="goTo" id="goTo" value="">
</form>

HTML;

require_once "admin-js.php";

echo <<<HTML
</body>
</html>
HTML;




?>

  <!-- footer end-->
