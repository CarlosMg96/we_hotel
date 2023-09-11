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

<style type="text/css">

  .select-dropdown,
.select-dropdown * {
  margin: 0;
  padding: 0;
  position: relative;
  box-sizing: border-box;
}
.select-dropdown, .input-id  {
  position: relative;
  background-color: transparent;
  border-radius: 0px;
}
.select-dropdown select, .input-id {
  font-size: 1rem;
  font-weight: normal;
  max-width: 100%;
  padding: 8px 24px 8px 10px;
  border: none;
  background-color: transparent;
    -webkit-appearance: none;
    -moz-appearance: none;
  appearance: none;
}
.select-dropdown select:active, .select-dropdown select:focus {
  outline: none;
  box-shadow: none;
}
.select-dropdown:after {
  content: "";
  position: absolute;
  top: 50%;
  right: 8px;
  width: 0;
  height: 0;
  margin-top: -2px;
  border-top: 5px solid #aaa;
  border-right: 5px solid transparent;
  border-left: 5px solid transparent;
}
.select-dropdown, .input-id  {
  border-bottom:1px solid black;
}
.input-id {
  width:80%;
}

.datepicker__month-day--first-day-selected, .datepicker__month-day--last-day-selected {
      background-color: #3858e9;
      background-color: #DEB666;
      color: #fff;
  }
  .datepicker__month-day--selected {
  background-color: rgba(222, 182, 102, 0.6);
  color: #fff;
  }
  .datepicker__month-day--hovering {
      background-color: rgba(222, 182, 102, 0.2);
      color: #fff;
    }
  .datepicker__submit-button, .datepicker__clear-button{
      background-color: #DEB666;
      color: #fff;
  }
  .datepicker__submit-button:hover, .datepicker__clear-button:hover {
      background-color: #DEB666;
      color: #ffffff;
    }
    .datepicker__month-day--today {
      background-color: #dadada;
      border-radius:8px;
    }
    .datepicker__month-name{
      color: #DEB666;
      font-size:1.4em;
      font-weight:200;
    }
    .datepicker__month-day--disabled:after {
        content: '\\00d7';
        left: 50%; top: 50%;
        position: absolute;
        color: darkgoldenrod;
        font-size: 26px;
        transform: translate(-50%, -50%);
  }
  .datepicker__close-button, .datepicker__clear-button, .datepicker__submit-button{
    background-color: #DEB666;
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

.resBox1 {
  min-width:10%;
  height:120px;
  font-size:0.8em;
  text-align:left;
   overflow: visible;
}

    </style>


      

      
      
      <!-- background-image: url('im/diagonals.png');background-size: cover;  -->
      <div style="width:100%;  position:relative; height:4.3em">
      </div>

  <div style="width:100%; height:450px; background-image:url('im/headers-7.jpg'); background-size:cover; text-align: center;">
    <img data-aos="fade-in" data-aos-duration="3700"  src="im/acapulco/logo-we-acapulco.png" style="height:220px; margin:5em auto;">
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
      <img data-aos="fade-down"  data-aos-duration="1700" src="im/acapulco/we-acapulco-42.jpg" style="width:80%; margin-bottom:2em">
      
    </div>
    <div class="a58" style=" border:0px solid blue; text-align:left; display:flex; flex-flow: column wrap; justify-content:center; ">
      <span class=title1>We Acapulco<br></span>
      <span class=title2>Business / Pleasure Hotel</span>
      <br>
      <p>
        Acapulco es el lugar perfecto para disfrutar de descanso y diversión en familia, y en <b>We Acapulco Business & Pleasure Hotel</b>, nos aseguramos de que te sientas como en casa, para que puedas disfrutar al máximo de todo lo que este destino tiene para ofrecer.
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
    <span style="font-size:1.2em; color:#DEB666">Descansa y diviértete en</span>
    <br>
    <span style="font-size:1.6em; color:#DEB666"><b>We Hotel Acapulco</b></span>
    <br><br>
    <p>
    Te ofrecemos mucho más que una simple habitación: una experiencia de comodidad y hospitalidad que te hará sentir como en casa.
    </p>
    <p>
    Disfruta el sol y la playa en compañía de tu familia y amigos o mientras celebras tu luna de miel. Será un placer recibirte.
    </p>
    <p>
      <br>
    </p>
    <p>
      <b>
        ¡Llegó la hora de disfrutar Acapulco!
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







<style type="text/css">

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


.glide__slide_ts {
  min-height: 260px;min-width:340px;  overflow:visible; font-size: 1em; font-weight: 900;
}

.glide__slide_f {
  height: 480px;width:100%; 
}

.ts { background-color: white;  width:94%; height:94%;  margin:3%;  box-shadow: 1px -1px 10px 0px rgba(0,0,0,0.2);  }
.ts-main {  position: relative; width:90%;margin:1em auto;  text-align: left; font-weight:100;  line-height: 1.4em; }
.ts-fecha { width:100%; text-align:right; color:silver; font-size:0.8em;}
.ts-person { color:silver; font-size:0.8em;}
.ts-foto { float:left;display:block; width:34px; height:34px; border-radius:50%; margin-right:1em; background-size:cover; }
.ts-title { font-size:1.2em;  color: #DEB666;}
.ts-txt { font-size:1.2em;  color: gray; font-size:0.9em;  white-space:normal !important;}

.exp {
  background-color: #fff;  width:94%; height:80%;  margin:3%;  box-shadow: 1px -1px 10px 0px rgba(0,0,0,0.2);
  display: flex;
}
.exp-foto {  width:26%;height:100%; background-size: cover; background-position: center; }
.exp-main {  width:64%; position: relative; margin:2em auto;  text-align: left; font-weight:100;  line-height: 1.4em; white-space:normal !important; }
.exp-title { font-size:2em;  color: #DEB666; white-space:normal !important; line-height: 2em;}
.exp-addr { font-size:1em;  color: silver; white-space:normal !important;  }
.exp-desc { font-size:1em;  color: black; white-space:normal !important; margin:0.6em auto; }

.ev {  background-color: white;  width:94%; height:94%;  margin:3%;  box-shadow: 1px -1px 10px 0px rgba(0,0,0,0.2); }
.ev-foto{  width:100%;height:180px;  background-size: cover; background-position: center;  }
.ev-main { position: relative; width:90%;margin:1em auto;  text-align: left; font-weight:100;  line-height: 1.4em; }
.ev-title {  font-size:1.2em;  color: #DEB666; }
.ev-txt {  font-size:0.9em; color:black;  }


</style>

<div style="width:100%; text-align:center; margin-bottom:4em">
  <span class=title1 style="margin:2em auto 0em auto">Descansa y diviértete en We Hotel Acapulco</span>
</div>
HTML;



$location = 'acapulco'; $Loc="Acapulco";
require_once "habitaciones.php";


echo <<<HTML

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
                <br><div class=ts-person><div class="ts-foto" style="background-image:url('im/acapulco/person-1.jpg')"></div> aaronroldan</div>
                <br><span class=ts-title>Buen viaje</span>
  
                <br><span class=ts-txt>“Nos encantó nuestra estancia en Acapulco. Claro que volveremos pero ahora con toda la familia, la habitación muy cómoda y la vista genial”.</span>
                <br><br>
              </div>
            </div>
          </li>

          <li class="glide__slide_ts">
            <div class="ts">
              <div class="ts-main">
                <div class=ts-fecha>01/02/2022</div>
                <br><div class=ts-person><div class="ts-foto" style="background-image:url('im/acapulco/person-2.jpg')"></div> Davo Val</div>
                <br><span class=ts-title>Definitivamente descansas!</span>
                <br><span class=ts-txt>“Estuvimos de fin de semana en este hotel, que de verdad es una grata experiencia. Muy buen trato, sus albercas muy limpias y la forma de reservar muy sencilla”.</span>
                <br><br>
              </div>
            </div>
          </li>

          <li class="glide__slide_ts">
            <div class="ts">
              <div class="ts-main">
                <div class=ts-fecha>01/02/2022</div>
                <br><div class=ts-person><div class="ts-foto" style="background-image:url('im/acapulco/person-3.jpg')"></div> Mariananewmoon</div>
                <br><span class=ts-title>Excelente lugar y trato</span>
                <br><span class=ts-txt>“Increíble experiencia con ustedes, que buen trato y atención! Gracias por su servicio y atención. Sus sugerencias nos hicieron pasar un excelente viaje”.</span>
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
  .gfotos{
    width:100%; height:100%; background-size: cover; background-position: center;
  }  
</style>

<div class="flex1">
  <div data-aos="fade-right" data-aos-duration="1700"  style="width:55%; height:460px;  background-size:cover;background-position: center;">


    <div class="glide Gfotos">

      <div class="glide__track" data-glide-el="track" style="opacity:1;">
        <ul class="glide__slides">

          <li class="glide__slide_f">
            <div class="gfotos" style="background-image: url('im/acapulco/we-acapulco-35.jpg');">
            </div>
          </li>

          <li class="glide__slide_f">
            <div class="gfotos" style="background-image: url('im/acapulco/we-acapulco-31.jpg');">
            </div>
          </li>

          <li class="glide__slide_f">
            <div class="gfotos" style="background-image: url('im/acapulco/we-acapulco-27.jpg');">
            
            </div>
          </li>

          <li class="glide__slide_f">
            <div class="gfotos" style="background-image: url('im/acapulco/we-acapulco-28.jpg');">
            
            </div>
          </li>

          <li class="glide__slide_ts">
            <div class="gfotos" style="background-image: url('im/acapulco/we-acapulco-29.jpg');">
            
            </div>
          </li>

          <li class="glide__slide_ts">
            <div class="gfotos" style="background-image: url('im/acapulco/we-acapulco-30.jpg');">
            
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
    <div style="display:flex; flex-flow: column wrap; justify-content:center; width:60%; margin-right:30%; min-height:460px; overflow:visible;">
      <div  style="text-align: left;" data-aos="fade-down" data-aos-duration="700" >
        <span class="title1">Bajo el sol de Acapulco</span><br><br>
        Estamos ubicados en la costera Miguel Alemán, a solo cinco minutos del Fuerte de San Diego, a dos cuadras del Parque Papagayo, a 10 minutos de la Quebrada y a 20 minutos de la Isla Roqueta.
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
    <span class=title1>Disfruta We<br>Hotel Acapulco<br></span>
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
    <img data-aos="fade-left"  data-aos-duration="1000" src="im/acapulco/we-acapulco-40.jpg" style="width:29%; ">
    <img data-aos="fade-left"  data-aos-duration="1500" src="im/acapulco/we-acapulco-39.jpg" style="width:29%; margin-left:5px;">
    <img data-aos="fade-left"  data-aos-duration="2000" src="im/acapulco/we-acapulco-38.jpg" style="width:29%; margin-left:5px;">
    <!--
    <img src="im/ta/3.jpg" style="max-width:100%">
    -->
  </div>
</div>


HTML;


    $Atraccion = $fotoAtraccion = $detAtraccion = array(); 

    $query = "SELECT * FROM atracciones WHERE sede='Acapulco' AND (st != 2 OR st IS NULL)";
    $result=mysqli_query($cx,$query) or die('err0:'.mysqli_error($cx));
    $cntat = 0;
    while ($row=mysqli_fetch_array($result)){
      $fotoAtraccion[$row['row_id']] = TRIM($row['pic']);
      $Atraccion[$row['row_id']] = TRIM($row['atraccion']).'|'.TRIM($row['km']);
      $detAtraccion[$row['row_id']] = TRIM($row['descripcion']);
        $cntat++;
    }

if ($cntat > 0){

echo <<<HTML

<div style="height:100px"></div>

<div style="width:100%; text-align:center; margin-bottom:4em">
  <span class=title1 style="margin:2em auto 0em auto">Experiencias Cercanas</span>
</div>

    <div class="glide experiencias">

      <div class="glide__arrows" data-glide-el="controls">
            <button id="slideBack" class="glide__arrow glide__arrow--left" data-glide-dir="<"><img class="arr" src="im/prev.svg"></button>
            <button id="slideForward" class="glide__arrow glide__arrow--right" data-glide-dir=">"><img class="arr" src="im/next.svg"></button>
      </div>

      <div class="glide__bullets" data-glide-el="controls[nav]">
HTML;


   for($x=1;$x<=$cntat; $x++){

    echo "<button class='glide__bullet' data-glide-dir='=$x'></button>";  

  }

echo <<<HTML

      </div>

      <div class="glide__track" data-glide-el="track" style="opacity:1;">
        <ul class="glide__slides">
HTML;

foreach($Atraccion as $aid => $atr){

    list($atraccion, $km) = explode ('|',$atr);

    $mapalink = "https://www.google.com/maps/place/Av+Río+Mayo+1200,+Vista+Hermosa,+62290+Cuernavaca,+Mor.";

echo <<<HTML

          <li class="glide__slide_exp">
            <div class="exp">
              <div class="exp-foto" style="background-image:url('im/atracciones/{$fotoAtraccion[$aid]}')">
              </div>
              <div class="exp-main">
                <div class=exp-title>$atraccion</div>
                <div class=exp-addr>$km Km</div>
                <div class=exp-desc>{$detAtraccion[$aid]}</div>
                <a href="$mapalink">
                  <input type="button" class="boton2 botonsm" value="Ver mapa">
                </a>
              </div>
            </div>
          </li>
HTML;

}


echo <<<HTML


        </ul>
      </div> <!-- glide track -->

    </div> <!-- glide -->



<script type="text/javascript">
var glide = new Glide(".experiencias", {
  type: "carousel",
  focusAt: "center",
  perView: 1,
  autoplay: 3000,
  animationDuration: 2000

});
glide.mount();
</script>

HTML;

} // cntat

echo <<<HTML

<div style="width:100%; height:140px"></div>


<div style="width:100%; text-align:center; margin-bottom:4em">
  <span class=title1 style="margin:2em auto 0em auto">Al alcance de tu mano</span>
</div>

<div class="flex1">

  <div style="width:38%;  height:400px;">
    <div style="display:flex; flex-flow: column wrap; justify-content:center; width:70%; margin-left:28%; height:400px">
      
      <div  style="text-align: justify;" data-aos="fade-down" data-aos-duration="700" >
        <img data-aos="flip-right"  src="im/acapulco/gbb.png" style="width:130px"><br><br>
        <span class="title2">Lounge Bar</span><br><br>
        GBB Lounge abre sus puertas en puentes y días feriados para que disfrutes de bebidas y snacks mientras te bronceas y refrescas en la piscina o desde la comodidad de tu habitación con nuestro servicio de room service.
      </div>
    </div>
  </div>

    <div data-aos="fade-right" data-aos-duration="1700"  style="width:55%; height:400px; background-image: url('im/acapulco/we-acapulco-24.jpg'); background-size:cover;background-position: center;">


  </div>
</div>





<div style="width:100%; height:160px"></div>

HTML;

    $Evento = $fotoEvento = array(); 

    $query = "SELECT * FROM eventos WHERE sede='Acapulco' AND (st != 2 OR st IS NULL)";
    $result=mysqli_query($cx,$query) or die('err0:'.mysqli_error($cx));
    $cntev = 0;
    while ($row=mysqli_fetch_array($result)){
      $fotoEvento[$row['row_id']] = TRIM($row['pic']);
      $Evento[$row['row_id']] = TRIM($row['evento']).'|'.TRIM($row['donde']).'|'.TRIM($row['cuando']).'|'.TRIM($row['direccion']);
      $detEvento[$row['row_id']] = TRIM($row['descripcion']);
        $cntev++;
    }

if ($cntev >0){

echo <<<HTML

<div style="width:100%; text-align:center; margin-bottom:4em">
  <span class=title1 style="margin:2em auto 0em auto">Próximos eventos cercanos</span>
</div>

    <div class="glide eventos">

      <div class="glide__arrows" data-glide-el="controls">
            <button id="slideBack" class="glide__arrow glide__arrow--left" data-glide-dir="<"><img class="arr" src="im/prev.svg"></button>
            <button id="slideForward" class="glide__arrow glide__arrow--right" data-glide-dir=">"><img class="arr" src="im/next.svg"></button>
      </div>

      <div class="glide__bullets" data-glide-el="controls[nav]">
HTML;



  for($x=1;$x<=$cntev; $x++){

    echo "<button class='glide__bullet' data-glide-dir='=$x'></button>";  

  }
  
echo <<<HTML

      </div>

      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">

HTML;


  foreach($Evento as $eid => $ev){

    list($eventoname, $eventodonde, $eventocuando, $eventodireccion) = explode ('|',$ev);

echo <<<HTML

<li class="glide__slide_ev">
            <div class="ev">
              <div class="ev-foto" style="background-image:url('im/eventos/{$fotoEvento[$eid]}')">
                
              </div>
              <div class="ev-main">
                <span class=ev-title>$eventoname</span>
                <br><span class=ev-txt><b>$eventodonde</b><br> 
                {$detEvento[$eid]}
                </span>
              </div>
            </div>
          </li>

HTML;

  }

echo <<<HTML

        </ul>
      </div> <!-- glide track -->

    </div> <!-- glide -->



<script type="text/javascript">
var glide = new Glide(".eventos", {
  type: "carousel",
  focusAt: "center",
  perView: 3
});
glide.mount();
</script>

<div style="height:100px; width:100%"></div>

HTML;


} // if cntev

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

HTML;



echo <<<HTML

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
