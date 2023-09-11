<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$fechaToday=date('Y-m-dH:i:s');

require_once "functions.php";

$r = rand(10000,9999);
$rr = time().$r;

$m=1;
if (!empty($_REQUEST['m'])){
  $m = $_REQUEST['m'];
}

require_once "header.php";

echo <<<HTML

<link href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.theme.min.css" rel="stylesheet" type="text/css">  
<link href='css/glide.css' rel='stylesheet'>

      
      <!-- background-image: url('im/diagonals.png');background-size: cover;  -->
      <div style="width:100%;  position:relative; height:4.3em">
      </div>

  <div style="width:100%; height:450px; background-image:url('im/headers-1.jpg'); background-size:cover; text-align: center; ">
    <img data-aos="fade-in" data-aos-duration="3700"  src="im/puertomorelos/logo-we-puertomorelos.png" style="height:220px; margin:5em auto;">
  </div>

HTML;

$top = "450px";
require_once "reservar.php";

echo <<<HTML


  <div style="height:130px; width:100%;"></div>

<style>
  .a34 {width:34%;}
  .a58 {width:58%;}
  @media only screen and (max-width: 600px) {
    .a34 {width:90%;}
    .a58 {width:90%; margin-top:2em}
  }

  /*
  @media only screen and (orientation: landscape) {
    }
  */
</style>



  <div class="flex1" style="width:80%; margin:100px auto">
    <div class="a34" style=" text-align:right;">
      <img  data-aos="fade-right"  data-aos-duration="1700" src="im/we_hotels_100.jpg" style="width:88%; position:absolute; bottom:0; z-index:-1; left:0">
      <img data-aos="fade-down"  data-aos-duration="1700" src="im/puertomorelos/we-puerto-morelos-18.jpg" style="width:80%; margin-bottom:2em">
      
    </div>
    <div class="a58" style=" border:0px solid blue; text-align:left; display:flex; flex-flow: column wrap; justify-content:center; ">
      <span class=title1>We Puerto Morelos<br></span>
      <span class=title2>Business / Pleasure Hotel</span>
      <br>
      <p>
        ¡Bienvenido a <b>We Hotel Puerto Morelos!</b> Un oasis de descanso, donde la brisa del mar y el sol de la Riviera Maya te envolverán en un abrazo cálido y te acompañarán durante toda tu estancia.
      </p>
    </div>
  </div>



<style>
  .a50 {width:50%;}
  .a38 {width:38%;}
  @media only screen and (max-width: 600px) {
    .a50 {width:90%;}
    .a38 {width:90%; margin-top:2em}
  }
</style>

<div style="width:74%; text-align:left; margin:4em auto; padding:2em; display:flex; flex-flow: row wrap; justify-content:space-between; 
box-shadow: 1px -1px 15px 0px rgba(0,0,0,0.2);">

  <div class="a50">
    
    
    <span style="font-size:1.6em; color:#DEB666"><b>We Hotel Puerto Morelos</b></span>
    <br>
    <span style="font-size:1.2em; color:#DEB666">Descansa con nosotros</span>
    <br><br>
    <p>
    Disfruta de unas vacaciones inolvidables, donde la relajación y la diversión se combinan naturalmente. Contamos con recepción 24 horas y WiFi gratuito para que no tengas que preocuparte por nada durante tu estancia.
    </p>
    <p>
Descansa en pareja, diviértete con amigos, comparte momentos de alegría con tu familia o vive la luna de miel de tus sueños mientras disfrutas del Caribe mexicano en We Hotel Puerto Morelos.
    </p>
    <p>
      <b>
        Disfruta de la Riviera Maya
      </b>
    </p>
  </div>
   

<!--
  ----- icons -------

  <i class="icofont-dart icofont-1x"></i>
  <box-icon color="orange" size='sm' type="solid" name="rocket"></box-icon>
  <i class="fa-solid fa-magnifying-glass"></i>

-->


  <div class="a38"> 
    <table class="icontable" >
      <tr>
        <td data-aos="fade-right" data-aos-duration="300" style='width:10%' class="ic">
          <i class="fa-regular fa-clock"></i></td>
        <td>Check-in: 3:00pm</td>
      </tr>
      <tr>
        <td data-aos="fade-right" data-aos-duration="600" class="ic">
          <i class="fa-solid fa-clock"></i></td>
        <td>Check out: 12:00pm</td>
      </tr>
      <tr>
        <td data-aos="fade-right" data-aos-duration="900" class="ic">
          <i class="fa-solid fa-globe"></i></td>
        <td>Hablamos español e inglés</td>
      </tr>
      <tr>
        <td data-aos="fade-right" data-aos-duration="1200" class="ic">
          <i class="fa-solid fa-child"></i></td>
        <td>Niños menores de 12 años: se requiere que compartan la habitación con sus padres.</td>
      </tr>
      <tr>
        <td data-aos="fade-right" data-aos-duration="1500" class="ic">
          <i class="fa-solid fa-users"></i></td>
        <td>En el caso de que haya una tercera o cuarta persona en la habitación, se aplicará un cargo extra.</td>
      </tr>

    </table>
    
  </div>
</div>




<div style="width:100%; text-align:center; margin-bottom:4em">
  <span class=title1 style="margin:2em auto 0em auto">Información <b>Importante</b></span>
  <p>
    <br>
  </p>
  <p data-aos="fade-down" data-aos-duration="1700"  style="width:50%; margin:1em auto">No olvides consultar <b>nuestras políticas</b> antes de hacer tu reservación, nos importa mucho que tu estadía sea cómoda.</p>
  <p>
    <br>
  </p>
  <p>
    <input type="button" class="boton1" value="Políticas del hotel" onmouseup="Politicas();">
  </p>
  <p>
    <br>
  </p>
</div>








<div style="width:100%; text-align:center; margin-bottom:4em">
  <span class=title1 style="margin:2em auto 0em auto">Disfruta de la Riviera Maya en We Hotel Puerto Morelos</span>
</div>
HTML;

$location = 'puertomorelos'; $Loc="Puerto Morelos";
require_once "habitaciones.php";

echo <<<HTML



<div class="flex1" style="width:80%; margin:100px auto">
    
    <div class="a58" style=" border:0px solid blue; text-align:left; display:flex; flex-flow: column wrap; justify-content:center; ">
      <span class=title1>We Puerto Morelos<br></span>
      <span class=title2>Business / Pleasure Hotel</span>
      <br>
      <p>
        ¡Bienvenido a <b>We Hotel Puerto Morelos!</b> Un oasis de descanso, donde la brisa del mar y el sol de la Riviera Maya te envolverán en un abrazo cálido y te acompañarán durante toda tu estancia.
      </p>
    </div>
    <div class="a34" style=" text-align:right;">
      <img  data-aos="fade-right"  data-aos-duration="1700" src="im/we_hotels_100.jpg" style="width:88%; position:absolute; bottom:0; z-index:-1; left:0">
      <img data-aos="fade-down"  data-aos-duration="1700" src="im/puertomorelos/we-puerto-morelos-rooftop-9.jpg" style="width:80%; margin-bottom:2em">
      
    </div>
  </div>





<style type="text/css">
.glide__slide_ts {min-height: 260px;min-width:340px;  overflow:visible; font-size: 1em; font-weight: 900; }
.ts { background-color: white;  width:94%; height:94%;  margin:3%;  box-shadow: 1px -1px 10px 0px rgba(0,0,0,0.2);  }
.ts-main {  position: relative; width:90%;margin:1em auto;  text-align: left; font-weight:100;  line-height: 1.4em; }
.ts-fecha { width:100%; text-align:right; color:silver; font-size:0.8em;}
.ts-person { color:silver; font-size:0.8em;}
.ts-foto { float:left;display:block; width:34px; height:34px; border-radius:50%; margin-right:1em; background-size:cover; }
.ts-title { font-size:1.2em;  color: #DEB666;}
.ts-txt { font-size:1.2em;  color: gray; font-size:0.9em;  white-space:normal !important;}
</style>

<div style="width:100%; text-align:center; margin-bottom:4em">
  <span class=title1 style="margin:2em auto 0em auto">Lo que piensan de nosotros</span>
</div>

    <div class="glide testimoniales">

      <div class="glide__arrows" data-glide-el="controls">
            <button id="slideBack" class="glide__arrow glide__arrow--left" data-glide-dir="<"><img class="arr" src="im/prev.svg"></button>
            <button id="slideForward" class="glide__arrow glide__arrow--right" data-glide-dir=">"><img class="arr" src="im/next.svg"></button>
      </div>

      <div class="glide__bullets" data-glide-el="controls[nav]">
        <button class="glide__bullet" data-glide-dir="=1"></button>
        <button class="glide__bullet" data-glide-dir="=2"></button>
        <button class="glide__bullet" data-glide-dir="=3"></button>
      </div>

      <div class="glide__track" data-glide-el="track" style="opacity:1;">
        <ul class="glide__slides">

          <li class="glide__slide_ts">
            <div class="ts">
              <div class="ts-main">
  
                <div class=ts-fecha>01/02/2022</div>
                <br><div class=ts-person><div class="ts-foto" style="background-image:url('im/puertomorelos/person-1.jpg')"></div> Stephanie W</div>
                <br><span class=ts-title>¡Perfecto en todo sentido!</span>
  
                <br><span class=ts-txt>““Estoy tan feliz de haber reservado 3 noches aquí, Louis y su personal son verdaderamente profesionales. Excelentes sugerencias sobre qué hacer y comer”.”.</span>
                <br><br>
              </div>
            </div>
          </li>

          <li class="glide__slide_ts">
            <div class="ts">
              <div class="ts-main">
                <div class=ts-fecha>01/02/2022</div>
                <br><div class=ts-person><div class="ts-foto" style="background-image:url('im/puertomorelos/person-2.jpg')"></div> Tjarch7</div>
                <br><span class=ts-title>Me encantó</span>
                <br><span class=ts-txt>“Nos alojamos en Marzo de 2022. Tuvimos una gran experiencia y definitivamente me quedaría aquí de nuevo. Es un hotel céntrico y sin duda regresaremos”.</span>
                <br><br>
              </div>
            </div>
          </li>

          <li class="glide__slide_ts">
            <div class="ts">
              <div class="ts-main">
                <div class=ts-fecha>01/02/2022</div>
                <br><div class=ts-person><div class="ts-foto" style="background-image:url('im/puertomorelos/person-3.jpg')"></div> Madeline Cook</div>
                <br><span class=ts-title>Pueblo de playa relajante</span>
                <br><span class=ts-txt>“Es un hotel muy agradable y limpio con un personal amable a un precio razonable. Tienen una piscina en la azotea con una gran vista”.</span>
                <br><br>
              </div>
            </div>
          </li>

        </ul>
      </div> <!-- glide track -->

    </div> <!-- glide -->



<script type="text/javascript">
var glide = new Glide(".testimoniales", {
  type: "carousel",
  focusAt: "center",
  perView: 3
});
glide.mount();
</script>


<div style="height:100px; width:100%"></div>


<style type="text/css">
  .gfotos{ width:100%; height:100%; background-size: cover; background-position: center; }
  .glide__slide_f {height: 460px;width:100%; }
</style>

<div class="flex1">
  <div data-aos="fade-right" data-aos-duration="1700"  style="width:55%; height:460px;  background-size:cover;background-position: center;">


    <div class="glide Gfotos">
      <!-- 
      <div class="glide__arrows" data-glide-el="controls">
            <button id="slideBack" class="glide__arrow glide__arrow--left" data-glide-dir="<"><img class="arr" src="im/prev.svg"></button>
            <button id="slideForward" class="glide__arrow glide__arrow--right" data-glide-dir=">"><img class="arr" src="im/next.svg"></button>
      </div>

      <div class="glide__bullets" data-glide-el="controls[nav]">
        <button class="glide__bullet" data-glide-dir="=1"></button>
        <button class="glide__bullet" data-glide-dir="=2"></button>
        <button class="glide__bullet" data-glide-dir="=3"></button>
      </div>
      -->

      <div class="glide__track" data-glide-el="track" style="opacity:1;">
        <ul class="glide__slides">


          <li class="glide__slide_f">
            <div class="gfotos" style="background-image: url('im/puertomorelos/we-puerto-morelos-11.jpg');">
            </div>
          </li>

          <li class="glide__slide_f">
            <div class="gfotos" style="background-image: url('im/puertomorelos/we-puerto-morelos-2.jpg');">
            </div>
          </li>

          <li class="glide__slide_f">
            <div class="gfotos" style="background-image: url('im/puertomorelos/we-puerto-morelos-23.jpg');">
            </div>
          </li>


          

        </ul>
      </div> <!-- glide track -->

    </div> <!-- glide -->



<script type="text/javascript">
var glide = new Glide(".Gfotos", {
  type: "carousel",
  autoplay: 2000,
  animationDuration: 2000
});
glide.mount();
</script>


  </div>
  <div style="width:38%;  min-height:460px; overflow:visible;">
    <div style="display:flex; flex-flow: column wrap; justify-content:center; width:60%; margin-right:30%; min-height:456px; overflow:visible">
      
      <div  style="text-align: left;" data-aos="fade-down" data-aos-duration="700" >
        <span class="title1">El espacio ideal para tu descanso</span><br><br>
        Ubicado en Puerto Morelos, un pueblo de pescadores que ha sabido conservar su auténtica esencia, nuestro hotel te ofrece la oportunidad de disfrutar las playas Ojo de Agua y Puerto Morelos, situadas a unos pasos y La Bonita a 1.5 km. 
<p>
Estamos a tan solo 27 minutos del aeropuerto internacional de Cancún, por lo que podrás llegar fácilmente. 
</p>
<b>Reserva tu habitación</b>

      </div>
    </div>
  </div>
</div>







<div style="width:100%; height:80px"></div>




<style>
  .a30 {width:30%;}
  .a60 {width:60%;}
  @media only screen and (max-width: 600px) {
    .a30 {width:90%;}
    .a60 {width:90%; margin-top:2em}
  }
</style>

<div class="flex1" style="width:85%; text-align:center; margin-left:15%">
  <div class="a30" style="text-align: left;">
    <span class=title1>Disfruta We Hotel<br>Puerto Morelos<br></span>
    <p>
    <span class=title2>Compartir contigo es un placer</span>
    </p>

  <table class="icontable" style="text-align:left">
    <tr>
      <td class="ic2" style="width:5%"><i class="fa-solid fa-water-ladder"></i></td>
        <td>Piscina y camastros en rooftop</td>
    </tr>
    <tr>
      <td class="ic2"><i class="fa-solid fa-utensils"></i></td>
        <td>Restaurante</td>
    </tr>
    <tr>
      <td class="ic2"><i class="fa-solid fa-wifi"></i></td>
        <td>Wifi sin costo</td>
    </tr>
    <tr>
      <td class="ic2"><i class="fa-solid fa-clock"></i></td>
        <td>Servicio de recepción las 24 horas</td>
    </tr>
    <tr>
      <td class="ic2"><i class="fa-solid fa-ticket"></i></td>
        <td>Asistencia turística y para la compra de entradas</td>
    </tr>
    <tr>
      <td class="ic2"><i class="fa-solid fa-shirt"></i></td>
        <td>Servicio de lavandería o tintorería</td>
    </tr>
    <tr>
      <td class="ic2"><i class="fa-solid fa-suitcase-rolling"></i></td>
        <td>Resguardo de equipaje (Sólo antes de la hora del check-in)</td>
    </tr>
    <tr>
      <td class="ic2"><i class="fa-solid fa-elevator"></i></td>
        <td>Ascensor</td>
    </tr>
  </table>
  </div>

  <div class="a60" >
    <img data-aos="fade-left"  data-aos-duration="1000" src="im/puertomorelos/we-puerto-morelos-32.jpg" style="width:29%; ">
    <img data-aos="fade-left"  data-aos-duration="1500" src="im/puertomorelos/we-puerto-morelos-33.jpg" style="width:29%; margin-left:5px;">
    <img data-aos="fade-left"  data-aos-duration="2000" src="im/puertomorelos/we-puerto-morelos-34.jpg" style="width:29%; margin-left:5px;">
    <!--
    <img src="im/ta/3.jpg" style="max-width:100%">
    -->
  </div>
</div>


HTML;

$location = 'puertomorelos'; $Loc="Puerto Morelos";
require_once "experiencias-glide.php";

echo <<<HTML


<div style="width:100%; height:140px"></div>




<div style="width:100%; text-align:center; margin-bottom:4em">
  <span class=title1 style="margin:2em auto 0em auto">Al alcance de tu mano</span>
</div>

<div class="flex1">

  <div style="width:38%;  height:400px;">
    <div style="display:flex; flex-flow: column wrap; justify-content:center; width:70%; margin-left:28%; height:400px">
      
      <div  style="text-align: justify;" data-aos="fade-down" data-aos-duration="700" >
        <img data-aos="flip-right"  src="im/puertomorelos/osteria-barocca.png" style="width:130px"><br><br>
        <span class="title2">Restaurante Bar</span><br><br>
        Si buscas una experiencia culinaria italiana auténtica, llegaste al lugar indicado. Osteria Barocca, colinda con nuestro hotel y te ofrece deliciosos platillos que conservan el sabor clásico de la cocina italiana.
        <p>
          <a href='https://www.osteriabarocca.com'>
            <b>www.osteriabarocca.com</b>
          </a>
        </p>
      </div>
    </div>
  </div>

    <div data-aos="fade-right" data-aos-duration="1700"  style="width:55%; height:400px; background-image: url('im/puertomorelos/osteria-barocca-foto.jpg'); background-size:cover;background-position: center;">


  </div>
</div>



<div style="width:100%; height:160px"></div>



HTML;

$location = 'puertomorelos'; $Loc="Puerto Morelos";
require_once "eventos-glide.php";

echo <<<HTML



<style>
  .a28 {width:28%;}
  .a68 {width:68%;}
  @media only screen and (max-width: 600px) {
    .a28 {width:90%;}
    .a68 {width:90%; margin-top:2em}
  }
</style>

<div  style="width:90%; margin-left:10%">
    <div style="text-align:left;">
      <img src="im/we_hotels_45.jpg" style="width:100px">
    </div>

  <div class="flex1" style="width:85%; margin-left:15%">
  
    <div class="a28" style=" border:0px solid blue; text-align:left; display:flex; flex-flow: column wrap; justify-content:center; ">
      <span class="title1" style="font-size:2.3em">Esperamos<br>verte pronto</span>
    </div>
    <div class="a68" style="border:0px solid blue; text-align:left; display:flex; flex-flow: column wrap; justify-content:center; ">
      <table class="icontable" >
        <tr data-aos="fade-down" data-aos-duration="700" >
          <td style='width:10%' class="ic"><i class="fa-solid fa-phone"></i></td>
          <td>+52 998 3130227</td>
        </tr>
        <tr data-aos="fade-down" data-aos-duration="1200" >
          <td class="ic"><i class="fa-solid fa-envelope"></i></td>
          <td>puertomorelos@wehotels.com</td>
        </tr>
        <tr data-aos="fade-down" data-aos-duration="1700" >
          <td class="ic"><i class="fa-solid fa-location-dot"></i></td>

          <td>Niños Heroes 30, 77580 Puerto Morelos, Q.R.</td>
        </tr>
      </table>      
    </div>
    
  </div>
  <div style="width:100%; height:150px"></div>
  <img src="im/we_hotels_45.jpg" style="width:100px; position:absolute; bottom:0px; right:0px">
</div>

<style>
  .map {
    -webkit-filter: grayscale(100%);
       -moz-filter: grayscale(100%);
        -ms-filter: grayscale(100%);
         -o-filter: grayscale(100%);
            filter: grayscale(100%);
  }
</style>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3728.554835757473!2d-86.8786294882923!3d20.849675293823374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4e8842135fb66b%3A0x28c1118833460f2a!2sNi%C3%B1os%20Heroes%2030%2C%2077580%20Puerto%20Morelos%2C%20Q.R.!5e0!3m2!1sen!2smx!4v1692117637142!5m2!1sen!2smx" width="100%" height="550px" style="border:0;" allowfullscreen="" loading="lazy" class="map" referrerpolicy="no-referrer-when-downgrade"></iframe>

<style type="text/css">

.arrows-box{
  float:right;
}

#selector{
  width:80%;
  margin:4em auto;
  font-size:1vw;
}

.buttons {
  right: 0;
  position: absolute;
  bottom: 0px;
  height:24vw;
  width: 90%;
  z-index: 10;
}

ul,
ol {
  list-style: none;
}

#main {
  background: white;
  margin: auto;
  width: 100%;
  display: block;
  position:relative;
  
}

.slide {
  width: 100%;  
  margin: 0 auto;
  /*height: 50vw;*/
}


.slide ol li {
  width: 100%;
  position: relative;
  height: 50vw;
}

.slide ol li figure {
  height: 90%;
  width: 100%;
  margin: 0;
  padding: 0;
  position: relative;
  background-size:cover;
  background-position: top;
}

.slide ol li figure img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: 50% 20%;
}


.arrows {
  width: 50px;
  height: 50px;
  font-size: 2vw;
  font-weight:100;
  color: #DEB666;
  background-color: #fff;
  cursor:pointer;
}


.botones {
  position: absolute;
  bottom: 15px;
  left:15px;
  background-color:white;
  height:100%;
  width:34vw;
  min-width:300px;
  box-shadow: 1px -1px 15px 0px rgba(0,0,0,0.55);
}

.list-photos > figure {
  display: none;
}

</style>

  <div style="width:100%; height:30px"></div>

HTML;


require_once "footer.php";

?>

  <!-- footer end-->
