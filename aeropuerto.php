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

  <div style="width:100%; height:450px; background-image:url('im/headers-2.jpg'); background-size:cover; text-align: center;">
    <img data-aos="fade-in" data-aos-duration="3700" src="im/aeropuerto/logo-we-aeropuerto.png" style="height:220px; margin:5em auto;">
  </div>

HTML;

$top = "450px";
$location = 'aeropuerto'; $Loc="Aeropuerto";
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
      <img data-aos="fade-down"  data-aos-duration="1700" src="im/aeropuerto/we-aeropuerto-180.jpg" style="width:80%; margin-bottom:2em">
      
    </div>
    <div class="a58" style=" border:0px solid blue; text-align:left; display:flex; flex-flow: column wrap; justify-content:center; ">
      <span class=title1>We Aeropuerto<br></span>
      <span class=title2>Business / Pleasure Hotel</span>
      <br>
      <p>
        El descanso es fundamental antes y después de un viaje, y es por eso que en <b>We Aeropuerto - Business & Pleasure Hotel</b> nos aseguramos de que tu estancia sea lo más placentera posible.
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
    <span style="font-size:1.2em; color:#DEB666">Comodidad y conveniencia en</span>
    <br>
    <span style="font-size:1.6em; color:#DEB666"><b>We Hotel Aeropuerto</b></span>
    <br><br>
    <p>
    Descansa y relájate en nuestras cómodas y silenciosas habitaciones, diseñadas especialmente para disfrutar de una estadía tranquila y productiva. 
    </p>
    <p>
    Ya sea que viajes por motivos de negocios, placer o que estés a punto de comenzar tu luna de miel, contamos con la habitación perfecta para ti.
    </p>
    <p>
      <br>
    </p>
    <p>
      <b>
        Disfruta de tu estancia en CDMX
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
        <td>Check-in: 2:00pm</td>
      </tr>
      <tr>
        <td data-aos="fade-right" data-aos-duration="600" class="ic">
          <i class="fa-solid fa-clock"></i></td>
        <td>Check out: 1:00pm</td>
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
  <span class=title1 style="margin:2em auto 0em auto">Comodidad y conveniencia en We Hotel Aeropuerto</span>
</div>
HTML;

$location = 'aeropuerto'; $Loc="Aeropuerto";
require_once "habitaciones.php";

echo <<<HTML

<style type="text/css">

.ts { background-color: white;  width:94%; height:94%;  margin:3%;  box-shadow: 1px -1px 10px 0px rgba(0,0,0,0.2);  }
.ts-main {  position: relative; width:90%;margin:1em auto;  text-align: left; font-weight:100;  line-height: 1.4em; }
.ts-fecha { width:100%; text-align:right; color:silver; font-size:0.8em;}
.ts-person { color:silver; font-size:0.8em;}
.ts-foto { float:left;display:block; width:34px; height:34px; border-radius:50%; margin-right:1em; background-size:cover; }
.ts-title { font-size:1.2em;  color: #DEB666;}
.ts-txt { font-size:1.2em;  color: gray; font-size:0.9em;  white-space:normal !important;}

.glide__slide_ts {  min-height: 260px;min-width:340px;  overflow:visible; font-size: 1em; font-weight: 900; }

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
                <br><div class=ts-person><div class="ts-foto" style="background-image:url('im/aeropuerto/person-1.jpg')"></div> rgalan2016</div>
                <br><span class=ts-title>Excelente Servicio</span>
  
                <br><span class=ts-txt>“Nuestro vuelo llegó cerca de la una de la mañana. Cuando salimos ya estaba una camioneta esperando por nosotros. Al llegar al hotel nos dieron unas manzanas”.</span>
                <br><br>
              </div>
            </div>
          </li>

          <li class="glide__slide_ts">
            <div class="ts">
              <div class="ts-main">
                <div class=ts-fecha>01/02/2022</div>
                <br><div class=ts-person><div class="ts-foto" style="background-image:url('im/aeropuerto/person-2.jpg')"></div> Jaime Hilasaca</div>
                <br><span class=ts-title>Buen servicio</span>
                <br><span class=ts-txt>“Como esta cerca al aeropuerto y te dan movilidad gratuita para la llegada y la partida excelente y buen servicio y atención. Las habitaciones muy cómodas”.</span>
                <br><br>
              </div>
            </div>
          </li>

          <li class="glide__slide_ts">
            <div class="ts">
              <div class="ts-main">
                <div class=ts-fecha>01/02/2022</div>
                <br><div class=ts-person><div class="ts-foto" style="background-image:url('im/aeropuerto/person-3.jpg')"></div> Bibi G</div>
                <br><span class=ts-title>Excelente</span>
                <br><span class=ts-txt>“Relación precio - ubicación buenísima queda a minutos del aeropuerto, el servicio de transporte es gratuito, me encanto la amabilidad, limpieza, todo impecable”.</span>
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
  .gfotos{  width:100%; height:100%; background-size: cover; background-position: center; }
  .glide__slide_f { height: 400px;width:100%; }
</style>

<div class="flex1">
  <div data-aos="fade-right" data-aos-duration="1700"  class="a50" style=" height:400px;  background-size:cover;background-position: center;">


    <div class="glide Gfotos">

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

          <li class="glide__slide_f">
            <div class="gfotos" style="background-image: url('im/aeropuerto/we-aeropuerto-181.jpg');">
            </div>
          </li>

          <li class="glide__slide_f">
            <div class="gfotos" style="background-image: url('im/aeropuerto/we-aeropuerto-31.jpg');">
            </div>
          </li>

          <li class="glide__slide_f">
            <div class="gfotos" style="background-image: url('im/aeropuerto/we-aeropuerto-41.jpg');">
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
  <div class="a40" style=" height:400px;">
    <div style="display:flex; flex-flow: column wrap; justify-content:center; width:80%; margin-right:15%; height:400px; overflow:visible">
      
      <div  style="text-align: left; margin-left:2em" data-aos="fade-down" data-aos-duration="700" >
        <span class="title1">Ubicados estratégicamente</span><br><br>
        Nos encontramos ubicados frente al <b>Aeropuerto Internacional Benito Juárez</b> de la Ciudad de México (AICM), frente a la Terminal 1 y a 10 min. de la Terminal 2, por lo que somos una excelente opción de hospedaje para viajeros. No tendrás que preocuparte por los traslados, ya que te ofrecemos transporte a ambas terminales sin costo.
        <br><br>
<b>Reserva ahora</b>
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
    <span class=title1>Disfruta We<br>Hotel Aeropuerto<br></span>
    <p>
    <span class=title2>Compartir contigo es un placer</span>
    </p>
    <p>
      Ofrecemos una amplia gama de servicios que podrás disfrutar sin necesidad de salir del hotel:
    </p>

  <table class="icontable" style="text-align:left">
    <tr>
      <td class="ic2" style="width:5%"><i class="fa-solid fa-bell-concierge"></i></td>
        <td>Servicio al cuarto</td>
    </tr>
    <tr>
      <td class="ic2"><i class="fa-solid fa-dumbbell"></i></td>
        <td>Gimnasio</td>
    </tr>
    <tr>
      <td class="ic2"><i class="fa-solid fa-wifi"></i></td>
        <td>Wifi sin costo</td>
    </tr>
    <tr>
      <td class="ic2"><i class="fa-solid fa-utensils"></i></td>
        <td>Restaurante</td>
    </tr>
    
    
    <tr>
      <td class="ic2"><i class="fa-solid fa-car"></i></td>
        <td>Estacionamiento <span style='font-size:0.8em'>Sujeto a disponibilidad</span></td>
    </tr>
    <tr>
      <td class="ic2"><i class="fa-solid fa-user"></i></td>
        <td>Salones para eventos</td>
    </tr>
    
  </table>

    
  </div>

  <div class="a60" >
    <img data-aos="fade-left"  data-aos-duration="1000" src="im/aeropuerto/we-aeropuerto-03-1.jpg" style="width:29%; ">
    <img data-aos="fade-left"  data-aos-duration="1500" src="im/aeropuerto/we-aeropuerto-03-2.jpg" style="width:29%; margin-left:5px;">
    <img data-aos="fade-left"  data-aos-duration="2000" src="im/aeropuerto/we-aeropuerto-03-3.jpg" style="width:29%; margin-left:5px;">
    <!--
    <img src="im/ta/3.jpg" style="max-width:100%">
    -->
  </div>


</div>


<div style="width:85%; text-align:left; margin-left:15%">
  <p>Además, nuestro hotel es 100% libre de humo y ofrecemos WiFi gratuito en todo el edificio.</p>
    <p>Si necesitas guardar medicamentos, con gusto los guardamos en nuestro frigo bar en la recepción.</p>
</div>

<div style="width:100%; height:80px"></div>

<div class=flex1 style="width:90%; margin-left:5%">
  <div class=a50 data-aos="fade-right" data-aos-duration="700"  style="background-image:url('im/transporte.jpg'); min-height:300px;background-size:cover; background-position:center">
  </div>
  <div class=a40  style="display:flex; flex-flow: column wrap; justify-content:center;">
    <div  style="text-align: left;" data-aos="fade-down" data-aos-duration="700" >
      <span class="title1">
        Transporte gratuito en nuestras camionetas
      </span>
      <p>
        Te ofrecemos transportación gratuita al Aeropuerto las 24 horas, cada 30 minutos, a la Terminal 1 y a la Terminal 2 ¡Viaja con tranquilidad!
      </p>
    </div>
  </div>
</div>

<div style="width:100%; height:80px"></div>

<div class=flex1 style="width:90%; margin-left:5%">
  <div class=a50 data-aos="fade-left" data-aos-duration="700"  style="background-image:url('im/transporte-2.jpg'); min-height:300px;background-size:cover; background-position:center">
  </div>
  <div class=a40  style="display:flex; flex-flow: column wrap; justify-content:center;">
    <div  style="text-align: left;" data-aos="fade-down" data-aos-duration="700" >
      <span class="title1">
        ¿Dónde tomar el transporte al hotel en el aeropuerto?
      </span>
      <p>
        Terminal 1: Busca nuestra camioneta en la Puerta 4 de llegadas nacionales de la Terminal 1.
        </p>
        <p>
        Terminal 2: Busca nuestra oficina en la zona de hoteles de la Terminal 2, justo junto al 7Eleven.
        </p>
        <p>
    El horario en el que está disponible nuestro personal en las terminales es de 8:00 a.m. a 23:30 p.m. Si tu llegada es fuera de este horario, por favor comunícate directamente al hotel al número +525551333232 para que vayamos por ti. 
        </p>
    <b>¡Nos aseguraremos de que tu llegada sea lo más cómoda y sencilla posible!</b>

      </p>
    </div>
  </div>
</div>


<div style="width:100%; height:140px"></div>


<div style="width:100%; text-align:center; margin-bottom:4em">
  <span class=title1 style="margin:2em auto 0em auto">Al alcance de tu mano</span>
</div>

<div class="flex1">

  <div class="a40" style="min-height:400px;">
    <div style="display:flex; flex-flow: column wrap; justify-content:center; width:70%; margin-left:28%; height:400px">
      
      <div  style="text-align: justify;" data-aos="fade-down" data-aos-duration="700" >
        <img data-aos="flip-right"  src="im/mexico-mi-amor.png" style="width:250px"><br><br>
        <span class="title2">Restaurante Bar</span><br><br>
        ¿Quieres experimentar los sabores auténticos de México? Visítanos en nuestro restaurante, México mi amor, donde nuestro chef te llevará a un viaje culinario con platillos típicos como enchiladas, tacos y mole. ¡Te encantará!
      </div>
    </div>
  </div>

  <div data-aos="fade-right" data-aos-duration="1700"  class="a50" style="min-height:400px; background-image: url('im/food-1.jpg'); background-size:cover;background-position: center;">
  </div>
</div>





<div class="flex1">

<div data-aos="fade-right" data-aos-duration="1700"  class="a50" style="min-height:400px; background-image: url('im/food-2.jpg'); background-size:cover;background-position: center;">
</div>


  <div class="a40" style="min-height:400px;">
    <div style="display:flex; flex-flow: column wrap; justify-content:center; width:70%; margin-right:28%; margin-left:2em; height:400px">
      
      <div  style="text-align: justify;" data-aos="fade-down" data-aos-duration="700" >
        <img data-aos="flip-right"  src="im/mi-gusto-es.png" style="width:250px"><br><br>
        <span class="title2">Restaurante</span><br><br>
        Justo al lado del hotel se encuentra el restaurante Mi Gusto Es, una alianza culinaria que ofrece a nuestros huéspedes la oportunidad de disfrutar una amplia variedad de deliciosos platillos del mar.
      </div>
    </div>
  </div>


</div>


<div style="width:100%; height:80px"></div>

<div class=flex1 style="width:100%; ">
  <div class=a60 data-aos="fade-left" data-aos-duration="700">

  <style type="text/css">
  .gfotos, .glide__slide_f, .glide__slides, .glide__track {min-height: 450px; height:100%;width:100%; position:relative;}
  .gfotos{background-size: cover; background-position: center; position:relative;}
  .glide {left:0px;}
  </style>
    <div class="glide Gfotos1" style="width:100%; height:450px; ">

      <div class="glide__track" data-glide-el="track" >
        <ul class="glide__slides">

          <li class="glide__slide_f">
            <div class="gfotos" style="background-image: url('im/negocios-1.jpg');">
            </div>
          </li>

          <li class="glide__slide_f">
            <div class="gfotos" style="background-image: url('im/negocios-2.jpg');">
            </div>
          </li>

          <li class="glide__slide_f">
            <div class="gfotos" style="background-image: url('im/negocios-3.jpg');">
            </div>
          </li>

        </ul>
      </div> <!-- glide track -->

    </div> <!-- glide -->

<script type="text/javascript">
var glide = new Glide(".Gfotos1", {
  type: "carousel",
  autoplay: 1000,
  animationDuration: 2000
});
glide.mount();
</script>








  </div>
  <div class=a30  style="display:flex; flex-flow: column wrap; justify-content:center; margin-right:3em">
    <div  style="text-align: left;" data-aos="fade-down" data-aos-duration="700" >
      <span class="title1">
        Reuniones de negocios
y fiestas memorables
      </span>
      <p>
        En We Aeropuerto contamos con una variedad de salones para eventos y reuniones, con capacidad de hasta 250 personas. Nuestro equipo está a tu disposición para ofrecer servicios personalizados, desde música hasta catering y decoración, para hacer de tu evento un momento inolvidable. Además, para tu comodidad, ofrecemos estacionamiento y WiFi gratuitos.
      </p>
    </div>
  </div>
</div>



HTML;

$location = 'aeropuerto'; $Loc="Aeropuerto";
require_once "experiencias-glide.php";

echo <<<HTML


HTML;

$location = 'aeropuerto'; $Loc="Aeropuerto";
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
          <td>+52 74 44851387  &nbsp; &nbsp; &nbsp; +52 74 44851312</td>
        </tr>
        <tr data-aos="fade-down" data-aos-duration="1200" >
          <td class="ic"><i class="fa-solid fa-envelope"></i></td>
          <td>acapulco@wehotels.com</td>
        </tr>
        <tr data-aos="fade-down" data-aos-duration="1700" >
          <td class="ic"><i class="fa-solid fa-location-dot"></i></td>

          <td>Costera Miguel Aleman 248 Acapulco, 39355.</td>
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

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.3766372325686!2d-99.89630858902544!3d16.857253117793228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ca58039f93c6c7%3A0xf252e50778fde88a!2sWe%20Hotel%20Acapulco!5e0!3m2!1sen!2smx!4v1691433284245!5m2!1sen!2smx"  width="100%" height="550px" style="border:0;" allowfullscreen="" loading="lazy" class="map" referrerpolicy="no-referrer-when-downgrade"></iframe>

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
