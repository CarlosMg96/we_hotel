<?php

echo<<<HTML

<style type="text/css">

.glide__slide_exp { min-height: 330px;width:100%; }
.exp {  background-color: #fff;  width:94%; height:80%;  margin:3%;  box-shadow: 1px -1px 10px 0px rgba(0,0,0,0.2);display: flex;}
.exp-foto {  width:26%;height:100%; background-size: cover; background-position: center; }
.exp-main {  width:64%; position: relative; margin:2em auto;  text-align: left; font-weight:100;  line-height: 1.4em; white-space:normal !important; }
.exp-title { font-size:2em;  color: #DEB666; white-space:normal !important; line-height: 2em;}
.exp-addr { font-size:1em;  color: silver; white-space:normal !important;  }
.exp-desc { font-size:1em;  color: black; white-space:normal !important; margin:0.6em auto; }

</style>

HTML;

    $Atraccion = $fotoAtraccion = $detAtraccion = array(); 

    $query = "SELECT * FROM atracciones WHERE sede='$Loc' AND (st != 2 OR st IS NULL)";
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
                <a href="$mapalink" style="display:none">
                  <input type="button" class="boton2 botonsm thin" value="Ver mapa">
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

?>

  <!-- footer end-->
