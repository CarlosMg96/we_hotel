<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$fechaToday=date('Y-m-dH:i:s');

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

  <div style="width:100%; height:300px; background-image:url('im/headers-3.jpg'); background-size:cover; text-align: center; overflow:hidden;">
    <div data-aos="fade-in" data-aos-duration="3700"  style="width:80%;margin:7em auto; text-align:left">
       <span class=title1>Nosotros</span>
       <br>
       <span class=title2>Orgullosa empresa mexicana</span>
    </div>
  </div>


  <div style="height:30px; width:100%;"></div>

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
      <img  data-aos="fade-right"  data-aos-duration="1700" src="im/we_hotels_99.jpg" style="width:68%; position:absolute; bottom:0; z-index:-1; left:0">
      <img data-aos="fade-down"  data-aos-duration="1700" src="im/we_hotels_95.jpg" style="width:80%; margin-bottom:2em">
      
    </div>
    <div class="a58" style=" border:0px solid blue; text-align:left; display:flex; flex-flow: column wrap; justify-content:center; ">
      <span class=title1>Nuestra historia<br></span>
      
      <br>
      <p>
      Somos una empresa 100% mexicana, comprometida con brindar a nuestros huéspedes una experiencia positiva única y memorable. Desde nuestra fundación a finales de 2016, hemos logrado destacar en un mercado altamente competitivo, posicionándonos entre los primeros lugares en la Zona de Aeropuerto y expandiéndonos hacia nuevos destinos.
      </p>
      <p>
Nos enorgullece brindar confort, descanso y seguridad en cada uno de nuestros hoteles, adhiriéndonos a los más altos estándares de calidad hotelera y cumpliendo con todas las leyes y regulaciones aplicables a la industria.
      </p>
    </div>
  </div>

<div style="width:100%; background-color: #FCFCFC;">
  <div style="width:80%; margin:100px auto 0px auto; text-align: center; ">
    <p>
Estamos comprometidos con ofrecer oportunidades de crecimiento y desarrollo para nuestro equipo, en un entorno de trabajo amable y responsable, enriqueciendo la experiencia de nuestros huéspedes a través de un servicio excepcional.
    </p>
    <p>
Nos apasiona lo que hacemos y estamos emocionados de compartir nuestra cultura y hospitalidad con cada uno de nuestros huéspedes.
    </p>
    <p>
      <b>
Hospédate con nosotros
      </b>
    </p>
    <div style="width:100%; position:relative;text-align: center;line-height: 0px; margin-top:4em;">
      <img src="im/marmol-horiz.jpg" style="width:400px; margin:0px auto;">
    </div>
  </div>
</div>



<div class=flex1 style="width:100%; overflow:hidden">
  <div  class="a50" style="min-height:50vw">
    <div style="width:70%; height:100%; margin-left:15%; display:flex;  flex-flow: column wrap; justify-content:center; ">
      <div>
      <span class="title1">  A todos nos gusta que nos traten bien </span>
      <p>
        Nos enfocamos en brindar un servicio excepcional a nuestros huéspedes, basado en nuestros valores de integridad, tolerancia, discreción, responsabilidad, humildad, respeto, lealtad y honestidad.
        </p>
        <p>
          Creemos que <b>todos merecen ser tratados con amabilidad y respeto</b>, y nos esforzamos por cumplir con nuestros compromisos y superar las expectativas de nuestros huéspedes en cada interacción.
        </p>
        </div>
    </div>
  </div>
  <div class="a50" style="min-height:49.9vw; background-image:url('im/we_hotels_19.jpg'); background-size: cover; background-position: center;">
    &nbsp:
  </div>
</div>

<div class=flex1 style="width:100%; overflow:hidden">
  <div class="a50" style="min-height:45vw; background-image:url('im/we_hotels_91.jpg'); background-size: cover; background-position: center;">
    &nbsp:
  </div>
  <div  class="a50" style=" min-height:49.9vw">
    <div style="width:70%; height:100%; margin-left:15%; display:flex;  flex-flow: column wrap; justify-content:center; ">
      <div>
      
        <p>
        Trabajamos día con día para obtener el reconocimiento como líderes en la industria de la hospitalidad, manteniendo una reputación de excelencia y replicando nuestro modelo de operación en cada uno de nuestros hoteles de manera uniforme y consistente, para que We Hotels sea sinónimo de calidad y servicio excepcional.
        </p>
        <p>
        Valoramos la integridad y la honestidad en todo lo que hacemos. Fomentamos un ambiente de trabajo tolerante, discreto y respetuoso, en el que cada miembro de nuestro equipo se sienta valorado y apreciado.
      </p>
      <p>

        <b>Nosotros lo hicimos, nosotros lo logramos.</b>
      </p>
      
      </div>
    </div>
  </div>
  
</div>

<div style="width:80%; margin:100px; margin-left:10%; text-align:center">
  <span class=title1>Cuidando tu estancia en cada detalle</span>
  <p>Nos capacitamos y certificamos continuamente para ofrecer la mejor experiencia a nuestros huéspedes.</p>
</div>

<div class=flex1 style="width:70%;margin-left: 15%;">

  <div class="a30">
    <div style="text-align: center;">
      <img src="im/punto-limpio.png" style="height:10vw" />
      <br><br>
      <span style="font-size:1.2em; color:#DEB666">Punto Limpio</span>
      <br>
    </div>
    <p>
      La salud de nuestros huéspedes es prioridad absoluta para nosotros. Por eso, seguimos los más altos estándares de calidad higiénica avalados por la certificación "Punto Limpio", emitida por las Secretarías de Salud y de Turismo, garantizando que nuestras instalaciones están libres de virus y bacterias.
    </p>
  </div>
  <div class="a30">
    <div style="text-align: center;">
      <img src="im/moderniza.png" style="height:10vw" />
      <br><br>
      <span style="font-size:1.2em; color:#DEB666">Moderniza</span>
    </div>
    <p>
      Para nosotros son muy importantes la calidad humana, así como el servicio y la satisfacción de nuestros huéspedes. Nuestros hoteles cuentan con el "Distintivo M" gracias a que implementamos exitosamente el programa de calidad "Moderniza" que respalda la adopción de mejores prácticas y nos distingue como empresa turística.
    </p>
  </div>
  <div class="a30">
    <div style="text-align: center;">
      <img src="im/mundo.png" style="height:10vw" />
      <br><br>
      <span style="font-size:1.2em; color:#DEB666">Código de conducta</span>
    </div>
    <p>
      Nos adherimos al Código de Conducta Nacional para la Protección de las Niñas, Niños y Adolescentes, creado por la Secretaría de Turismo para proteger a las niñas, niños y adolescentes de cualquier tipo de explotación o maltrato.
    </p>
  </div>

</div>



  <style type="text/css">
  .gfotos{ width:100%; height:100%; background-size: cover; background-position: center; }
  .glide__slide_f {height: 460px;width:100%; }
    @media only screen and (max-width: 600px) {
        .glide__slide_f {height: 260px; }
    }
  </style>
  <div class="glide Gfotos">

      <div class="glide__track" data-glide-el="track" style="opacity:1;">
        <ul class="glide__slides">

          <li class="glide__slide_f">
            <div class="gfotos" style="background-image: url('im/nos-1.jpg');">
            </div>
          </li>

          <li class="glide__slide_f">
            <div class="gfotos" style="background-image: url('im/nos-2.jpg');">
            </div>
          </li>

          <li class="glide__slide_f">
            <div class="gfotos" style="background-image: url('im/nos-3.jpg');">
            </div>
          </li>

          <li class="glide__slide_f">
            <div class="gfotos" style="background-image: url('im/nos-4.jpg');">
            </div>
          </li>

          <li class="glide__slide_f">
            <div class="gfotos" style="background-image: url('im/nos-6.jpg');">
            </div>
          </li>

          <li class="glide__slide_f">
            <div class="gfotos" style="background-image: url('im/nos-7.jpg');">
            </div>
          </li>

          <li class="glide__slide_f">
            <div class="gfotos" style="background-image: url('im/nos-8.jpg');">
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


<div style="width:80%; margin:100px; margin-left:10%;">
  <span class=title1>Somos We</span>
  <p>
    Estamos comprometidos en hacer de tu estancia un momento especial. Cada miembro de nuestro equipo tiene una pasión genuina por brindarle una experiencia maravillosa. 
    </p>
    <p>
Desde el momento en que cruzan nuestras puertas, nos esforzamos por crear un ambiente cálido y acogedor, lleno de sonrisas y atención personalizada. Estamos aquí para escuchar tus deseos, anticipar sus necesidades y convertir cada momento en algo inolvidable. Su felicidad y comodidad son nuestra máxima prioridad, y nuestro equipo hará todo lo posible para que se sientan como en casa. Estamos ansiosos por recibirlos y ser parte de su viaje, creando recuerdos que durarán para siempre."
  </p>
</div>



<div style="width:100%; background-color: #fcfcfc; overflow:hidden; text-align: center; margin:4em auto;">
  <div style="width:100%; height:4em"></div>

  <div style="width:80%; margin-left:20%; overflow:visible;" class="flex1">
    <div style=" text-align:left" class="a40">
      <p>
      <span class="title1">¿Qué es el éxito?</span>
      
      </p>

      <p>
      
      <ul>
        <li>Reír mucho y con regularidad.</li>
        <li>Ganarse el respeto de personas inteligentes y el cariño de los niños.</li>
        <li>Ganar el aprecio de críticos sinceros y soportar la traición de amigos falsos.</li>
        <li>Apreciar la belleza.</li>
        <li>Encontrar lo mejor de los demás.</li>
        <li>Dejar el mundo un poco mejor, ya sea mediante un niño sano, un trozo de jardín o el rescate de un grupo social.</li>
        <li>Saber que por lo menos una vida respiró mejor por haber vivido. Esto es tener éxito.</li>
      </ul>
      <i>Ralph Waldo Emerson</i>

      </p>
      <p>
        <a href="codigo-de-etica"><input type=button value="Código de ética" class="boton1"></a>
      </p>
    </div>
    <div style="overflow:visible; min-height:200px" class="a50">
      <img src="im/nosotros-2.jpg" style="width:45%; z-index:4; position:absolute; top:0;left:0;">
      <img src="im/we_hotels_99.jpg" style="position:absolute; top:40px; left:50px; width:45%; opacity:0.8; z-index:0">
    </div>
  </div>

  <div style="width:100%; height:4em"></div>
</div>




<div style="width:80%; margin-left:10%;text-align: center; margin-bottom:100px">
  <span class="title1">Nuestras marcas</span>
</div>


<div class=flex1 style="width:70%;margin-left: 15%;">

  <div class="a30">
    <div style="text-align: center;">
      <img src="im/logo-we-uniq-2.png" style="height:10vw" />
      <br><br>
    </div>
    <p>
      En cada rincón de nuestros hoteles Uniq encontrarás tranquilidad, lujo y confort, en donde nuestras instalaciones conviven en simbiosis perfecta con el entorno.
    </p>
  </div>
  <div class="a30">
    <div style="text-align: center;">
      <img src="im/logo-we-hotels-2.png" style="height:10vw" />
      <br><br>
    </div>
    <p>
      En We Hotels diseñamos espacios para brindarte la máxima comodidad y descanso, porque queremos que te sientas como en casa.
    </p>
  </div>
  <div class="a30">
    <div style="text-align: center;">
      <img src="im/logo-we-express-2.png" style="height:10vw" />
      <br><br>
      
    </div>
    <p>
      Sabemos que tu tiempo es valioso, por lo que nos aseguramos de que tengas todo lo que necesitas para que tu estancia en We EXPRESS sea lo más cómoda y conveniente posible.
    </p>
  </div>

</div>





<div style="width:100%; height:160px"></div>




<style>
  .glide__slide_ev {
    min-height: 330px;width:100%; 
  }
  .ev {  background-color: white;  width:94%; height:94%;  margin:3%;  box-shadow: 1px -1px 10px 0px rgba(0,0,0,0.2); }
.ev-foto{  width:100%;height:180px;  background-size: cover; background-position: center;  }
.ev-main { position: relative; width:90%;margin:1em auto;  text-align: left; font-weight:100;  line-height: 1.4em; }
.ev-title {  font-size:1.2em;  color: #DEB666; }
.ev-txt {  font-size:0.9em; color:black;  white-space:normal !important;}

</style>


<div style="width:100%; text-align:center; margin-bottom:4em">
  <span class=title1 style="margin:2em auto 0em auto">Filantropía</span>
</div>

    <div class="glide eventos">

      <div class="glide__arrows" data-glide-el="controls">
            <button id="slideBack" class="glide__arrow glide__arrow--left" data-glide-dir="<"><img class="arr" src="im/prev.svg"></button>
            <button id="slideForward" class="glide__arrow glide__arrow--right" data-glide-dir=">"><img class="arr" src="im/next.svg"></button>
      </div>

      <div class="glide__bullets" data-glide-el="controls[nav]">
        <button class="glide__bullet" data-glide-dir="=1"></button>
        <button class="glide__bullet" data-glide-dir="=2"></button>
        <button class="glide__bullet" data-glide-dir="=3"></button>
      </div>

      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">

          <li class="glide__slide_ev">
            <div class="ev">
              <div class="ev-foto" style="background-image:url('im/we-hotels-filantropia-1.jpg')">
                
              </div>
              <div class="ev-main">
                <span class=ev-title>La fiesta del siglo</span>
                <br>
                <br><span class=ev-txt>Colaboramos con La Fiesta del Siglo, un programa que busca reducir el índice de mortalidad y de accidentes relacionados con el consumo nocivo del alcohol entre jóvenes. </span>
                <br><br>
                <span style="color:#DEB666">
                  Leer más
                </span>
              </div>
            </div>
          </li>


        </ul>
      </div> <!-- glide track -->

    </div> <!-- glide -->



<script type="text/javascript">
var glide = new Glide(".eventos", {
  type: "carousel",
  focusAt: "center",
  perView: 1
});
glide.mount();
</script>

<div style="height:100px; width:100%"></div>




HTML;


require_once "footer.php";

?>

  <!-- footer end-->
