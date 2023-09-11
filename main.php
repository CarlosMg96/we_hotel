
<?php



echo <<<HTML

<style type="text/css">

  .emnews {
    border:1px solid silver;
    background-color: white;
    border-radius:2em;
    padding:0.4em 1em;
  }
  .arr{width:17px; color:#DEB666 }

  .mobileSpacer2 {display:none; }
  @media only screen and (max-width: 1200px) {
    .mobileSpacer  {  display:none !important; }
    .mobileSpacer2 { display:block; width:100%;height:30em; background-color:transparent;z-index:0; }
  }

</style>

      
      <!-- background-image: url('im/diagonals.png');background-size: cover;  -->
      <div style="width:100%;  position:relative; height:4.3em">
      </div>
      
      <div style="position:absolute; width:100%; height:600px; z-index:0; background-color: rgba(0,0,0,1);">
      </div>

      <div style="position:absolute; width:100%; height:300px; z-index:5; text-align:center">
            <img src="im/we-hotels-logo-wh.png" style="margin-top:130px; width:120px;"><br>
            <div style="margin-top:40px; color:white; font-size:1.4em;">nuestro hotel · nuestra experiencia</div>
      </div>

HTML;

$top = "600px";
require_once "reservar.php";

echo <<<HTML

  <div class="slider slider1">
    <ul class="slides" style="opacity:0.65">
          <li class="slide0">
          <div class="box" style="background-image:url('im/portada-1.jpg');"></div>
          </li>
          <li class="slide0">
          <div class="box" style="background-image:url('im/portada-2.jpg');"></div>
          </li>
          <li class="slide0">
          <div class="box" style="background-image:url('im/portada-3.jpg');"></div>
          </li>
    </ul>
  </div>


  <div style="height:130px; width:100%;"></div>
  <div class="mobileSpacer2"></div>

  <div class="flex1" style="width:80%; margin:0px auto">

    <div class="a35" style=" text-align:right;">
      <img src="im/marmol.jpg" style="width:88%; position:absolute; bottom:0; z-index:-1; left:0">
      <img src="im/alberca-vert.jpg" style="width:50%; margin-bottom:2em">
    </div>

    <div class="a55" style=" padding-top:2em;text-align:left; display:flex; flex-flow: column wrap; justify-content:center; ">
      <span class="title1 notranslate">We Hotels<br></span>
      <span class=title2>Recibirte es un placer</span>
      <p>
        Nos apasiona crear ambientes y espacios en diversos destinos y, en nuestra búsqueda constante de momentos únicos, hemos creado We Hotels, seleccionando lo mejor para que disfrutes de una estadía inolvidable.
      </p>
    </div>
    
  </div>

  <div style="width:100%; margin:4em 0em; height:30vw; background-image:url('im/alberca.jpg'); background-size:cover">
  </div>
<div style="width:100%; text-align:center; margin-bottom:4em">
  <span class=title1 style="margin:2em auto 0em auto">Nuestros Hoteles</span>
  <br>
  <span class=title2 style="margin:0em auto 2em auto">Compartir contigo es un privilegio</span>
</div>

<div id="main">
  <div class="glide slide" style="overflow: visible; ">
        <div class="glide__track" data-glide-el="track" style="overflow: visible; ">
          <ol class="glide__slides wrapper">
            <li class="glide__slide slideB">
              <figure style="background-image:url('im/slider-aca.jpg')">
              </figure>
            </li>
            <li class=" glide__slide slideB">
              <figure style="background-image:url('im/slider-pm.jpg')">
              </figure>
            </li>
            <li class=" glide__slide slideB">
              <figure style="background-image:url('im/slider-aero.jpg')">
              </figure>
            </li>
          </ol>

          <div class="buttons" >
            <div class="botones" >
              <div id="selector">
                <div id="sliderContent" >
                  <span class="title1 notranslate">WE ACAPULCO<br></span>
                  <br>
                  <span class=title2>Uno de los destinos más icónicos de México</span>
                  <p>
                    Ya sea por placer, trabajo, o ambos, disfruta de una estancia inolvidable en la playa
                  </p>
                </div>

                <p style="margin-top:1em">
                  <div class="arrows-box">
                    <div class="glide__arrows arrows flex1" data-glide-el="controls" style="width:120px">
            <button id="slideBack" class="glide__arrow glide__arrow--left arrows"  data-glide-dir="<"><img class="arr" src="im/prev-color.svg"></button>
            <button id="slideForward" class="glide__arrow glide__arrow--right arrows" data-glide-dir=">"><img class="arr" src="im/next-color.svg"></button>
                    </div>

                  </div>
                  <a id="ver" href="acapulco" class="ver_mas" style="color:#DEB666"> Ver más </a>
                </p>

              </div>
              
            </div>
          </div>

        </div>


      </div>

</div>








<div style="width:100%; background-color: #fcfcfc; text-align: center; margin:4em auto; position:relative; overflow:none;">

<div  class="graySpacer" style="width:100%;">
  &nbsp;
</div>

<div  class="grayLogo" style="width:100%; text-align: center;">
  <img src="im/we-hotels-logo-gris.png" style="width:300px">
</div>


  <div class="flex1 a80" style="margin:4em auto; overflow:none; ">

      <div class="a40" style="text-align:left; padding-left:1em;">
        <p>
        <span class="title1">Justo lo que necesitas</span>
        
        </p>
        <p>
        Una experiencia única, que te permita relajarte, trabajar o hacer negocios y también disfrutar de un ambiente de diversión y entretenimiento.
        </p>
        <p>
          <input type=button value="Reservar en We Hotels" class="boton1 notranslate">
        </p>
      </div>

      <div class="a45" style="padding-top:2em;; min-height:250px">
        <img src="im/drink.png" style="width:42%; z-index:4; position:absolute; right:50%">
        <img src="im/we_hotels_5.jpg" style="position:absolute; right:0; width:70%; opacity:0.8; z-index:0">
      </div>

  </div>

</div>


<div style="width:100%; height:2em; clear:both;"></div>

<div style="width: 70%; margin:2em 15%; text-align:center">
  <img src="im/We.png" style="width:100px; margin:10px auto;">
  <br>
  Tú, yo, nosotros
  <br>
  <p>
    Para nosotros <span class='notranslate'>“We”</span> es más que un pronombre, creemos que la verdadera hospitalidad va más allá de simplemente brindar un lugar para dormir, somos el espacio para que nuestros huéspedes puedan cumplir sus metas, ya sea descansar y pasar momentos de alegría, crecer en el mundo profesional o conocer nuevos lugares y culturas. Cada huésped que recibimos en nuestros hoteles, nos brinda una experiencia compartida y enriquecedora, que nos inspira a generar experiencias que se traduzcan en momentos entrañables para cada uno de ellos.
    </p>
    <p>
Te tratamos como nos gusta que nos traten, con respeto, con integridad, con cariño.
  </p>
  <p>
    <b>
      We somos nosotros, es tu experiencia enlazada con la nuestra.
    </b>
  </p>

  </p>
</div>

<div style="width:100%; background-color:#202020;">
<img src="im/alberca.jpg" style="width:100%">
  <div style="width:76%;margin-left:12%; margin-top:-80px;background-color:white; text-align: center;">
    <div style="width:100%; height:4em"></div>
    <div style="width:66%; margin:5px auto;">
      <span class="title1">Únete a nuesto Newsletter</span>
      <p>Entérate de todas las promociones y noticias de <span class='notranslate'>We Hotels</span></p>
      <br>
      <input class="emnews" placeholder="ejemplo@correo.com">
      <input type="button" class="boton1" value="Unirse" style="padding:0.5em 2em">
    </div>
    <div style="width:100%; height:4em"></div>
  </div>
  <p><br></p>

<style type="text/css">



.arrows-box{
  float:right;
  width:100px;
}

#selector{
  width:80%;
  margin:4em auto;
  
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
  background-color: transparent;
  cursor:pointer;
}


.botones {
  position: absolute;
  bottom: 15px;
  left:15px;
  background-color:white;
  width:34vw;
  min-width:300px;
  box-shadow: 1px -1px 15px 0px rgba(0,0,0,0.55);
}

.ver_mas { font-size:1.2em;}

.grayLogo { margin:0em auto; }
.graySpacer { height:0px;}
@media only screen and (max-width: 1100px) {
  .botones {  width:84vw; }
  .buttons{height:30vw; bottom:-15em}
  #sliderContent { font-size:0.9em;}.ver_mas { font-size:1em;}
  .graySpacer { height:14em; }
}

.list-photos > figure {
  display: none;
}

</style>
 
      

  <script type="text/javascript">
      var glide = $('.slider').glide().data('api_glide');







/*

let photos = document.querySelector(".list-photos");
let photostSlide = document.querySelectorAll("ol.glide__slides figure");

photostSlide.forEach((figure, index) => {
  console.log('index:'+index);
});

let photosList = document.querySelectorAll(".list-photos figure");

var count = 0;

photosList.forEach((figure, index, item) => {
  figure.classList.add("photo-" + count++);
});

if (count >= 0) {
  console.log("load mayor", photosList, (count = 0));
  //photosList = 0;
  photosList[1].style.display = "block";
} else {
  console.log("load");
}
*/



/* if (index === 0) {
  //console.log("Load Next photo", figure, index);
  //index = figure.nextSibling;
  //figure.style.display = "none";
  console.log(index = figure.nextSibling, index);
  //figure.nextSibling;
} else {
  //console.log("Load no");
  //figure.style.display = "none";
  //console.log(figure, index);
  //console.log('load ???');
  //console.log(figure.nextSibling, index);
} */

var options = {
  type: "slide",
  animationDuration: 1000,
  autoplay: 0,
  focusAt: "0",
  startAt: 0,
  perView: 1,
  peek: {
    before: 0,
    after: 0
  },afterTransition : function(event) { console.log('index='+event.index);} 
};

var glide = new Glide(".glide", options).mount();
glide.on("run", () => {
   console.log(glide.index);
   changeSlider(glide.index);
});
    </script>
HTML;



?>
