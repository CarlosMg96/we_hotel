<?php

echo <<<HTML

  <!--  -----------------------------------------------------------------------------  -->
<div style="width:100%; height:60px; background-color:orange"></div>

<style>
  .waButton {width:5em; vertical-align:middle; margin-left:0.7em}
  .a35 {width:35%;}
  .a45 {width:45%;}
  .a51 {width:51%;}
  @media only screen and (max-width: 600px) {
    .a35 {width:90%; margin-top:2em}
    .a45 {width:90%; margin-top:2em}
    .a51 {width:90%; margin-top:2em}
    .waButton {width:6em}
  }
</style>

  <!--  -----------------------------  footer start  ----------------------------------  -->

        <a style="position:fixed; bottom:0.6em; right:1em" href="https://api.whatsapp.com/send?phone=525559657293" target="_new">
          <img src="im/ic-wa.png" class="waButton">
        </a>

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

            <div class="a51 flex1" style="font-size:1em; overflow:auto;">
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
            <a href="eventos">
            <br><br> Eventos
            </a>
            <a href="contacto">
            <br><br> Contacto
            </a>
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
        <br>
        <a style="float:right; cursor:pointer; font-size:2em" onmouseup="$('#modal00').fadeOut();">
        <i class="icofont-close" style="color:white"></i></a>
        <br>

        <div style="width:90%; margin-left:10%; color:silver">
            <img src="im/We.png" style="width:40px;margin-bottom: 20px;">
            <hr style="border:0; border-top:1px solid silver; width:100%; ">
            <a href="./">
              <br><br> Inicio 
            </a>
            <a href="nosotros">
              <br><br> Nosotros
            </a>
            <a href="eventos">
            <br><br> Eventos
            </a>
            <a href="contacto">
              <br><br> Conatcto
            </a>
            <br><br><br>
            <hr style="border:0; border-top:1px solid silver; width:100%; ">
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


<form id="gotoForm" method="post" action="./" style="display:none;">
  <input type="text" name="goTo" id="goTo" value="">
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>


<!--

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  

    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/counterup2/2.0.2/index.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" ></script>
    -->

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script type="text/javascript">
        jQuery(document).ready(function($) {            

        });
  
        $(window).on('resize', function(){
          
        });

</script>


<script type="text/javascript">
  


  $(function() {


    AOS.init({
      // Global settings:
      disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
      startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
      initClassName: 'aos-init', // class applied after initialization
      animatedClassName: 'aos-animate', // class applied on animation
      useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
      disableMutationObserver: false, // disables automatic mutations' detections (advanced)
      debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
      throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
      

      // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
      offset: 120, // offset (in px) from the original trigger point
      delay: 400, // values from 0 to 3000, with step 50ms
      duration: 1700, // values from 0 to 3000, with step 50ms
      easing: 'ease', // default easing for AOS animations
      once: false, // whether animation should happen only once - while scrolling down
      mirror: false, // whether elements should animate out while scrolling past them
      anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });

  });

  function scrollIt(who1){
        updown="down";
        console.log('scrollit ('+who1+')');
        if (updown=='up'){
            $('html, body').animate({scrollTop: $('#'+who1).offset().top -400 }, 1000);     
            console.log('updown='+updown);
        } else {
            $('html, body').animate({scrollTop: $('#'+who1).offset().top -210 }, 1000); 
        }
  }


  function goto(wh){
    //window.location.assign(wh+".html");
    $('#goTo').val(wh);
    $('#gotoForm').delay("slow").submit();
    
  }

  function Politicas(){
    
    $.ajax({
      url : 'terminos.php',
      type : 'POST',
      dataType:'html',
      success : function(data) {   
          $('#emptyContent').html(data);
          setTimeout( function () { 
            $('#emptyModal0').fadeIn();
          }, 300);       

      }, error : function(request,error){
          alert("Request: "+JSON.stringify(request));
      }
    }); // ajax 

  }

  function Aviso(){
    
    $.ajax({
      url : 'aviso.php',
      type : 'POST',
      dataType:'html',
      success : function(data) {   
          $('#emptyContent').html(data);
          setTimeout( function () { 
            $('#emptyModal0').fadeIn();
          }, 300);       

      }, error : function(request,error){
          alert("Request: "+JSON.stringify(request));
      }
    }); // ajax 

  }

  function changeSlider(ix){
    $('#sliderContent').fadeOut();

    $.ajax({
      url : 'slider1.php',
      type : 'POST',
      dataType:'html',
      data: {'index':ix},
      success : function(data) {   
          $('#sliderContent').html(data);
          setTimeout( function () { 
            $('#sliderContent').fadeIn();
            const places = ["acapulco", "aeropuerto", "puertomorelos"];
            $('#ver').attr("href", places[ix]); 
          }, 300);       
      }, error : function(request,error){
          alert("Request: "+JSON.stringify(request));
      }
    }); // ajax 

  }

  function reveal(who) {
                var st = $('#'+who).css('display');
                if (st == 'none') {
                    $('#'+who).fadeIn();
                } else {
                    $('#'+who).fadeOut();
                }
            }        

</script>
</body>
</html>
HTML;
?>

  <!-- footer end-->
