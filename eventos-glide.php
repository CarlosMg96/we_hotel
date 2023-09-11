<?php

echo <<<HTML

<div style="width:100%; height:140px"></div>

<style type="text/css">

.glide__slide_ev { min-height: 330px;width:100%; }
.ev {  background-color: white;  width:94%; height:94%;  margin:3%;  box-shadow: 1px -1px 10px 0px rgba(0,0,0,0.2); }
.ev-foto{  width:100%;height:180px;  background-size: cover; background-position: center;  }
.ev-main { position: relative; width:90%;margin:1em auto;  text-align: left; font-weight:100;  line-height: 1.4em; }
.ev-title {  font-size:1.2em;  color: #DEB666; }
.ev-txt {  font-size:0.9em; color:black;  }

</style>
HTML;

    $Evento = $fotoEvento = array(); 

    $query = "SELECT * FROM eventos WHERE sede='$Loc' AND (st != 2 OR st IS NULL)";
    $result=mysqli_query($cx,$query) or die('err0:'.mysqli_error($cx));
    $cntev = 0;
    while ($row=mysqli_fetch_array($result)){
      $fotoEvento[$row['row_id']] = '';      
      if (!empty($row['pic'])){
        $fotoEvento[$row['row_id']] = TRIM($row['pic']);  
      }
      if (!empty($row['evento'])){ $row['evento'] = TRIM($row['evento']);}
      if (!empty($row['donde'])){ $row['donde'] = TRIM($row['donde']);}
      if (!empty($row['cuando'])){ $row['cuando'] = TRIM($row['cuando']);}
      if (!empty($row['direccion'])){ $row['direccion'] = TRIM($row['direccion']);}
      if (!empty($row['descripcion'])){ $row['descripcion'] = TRIM($row['descripcion']);}

      $Evento[$row['row_id']] = $row['evento'].'|'.$row['donde'].'|'.$row['cuando'].'|'.$row['direccion'];
      $detEvento[$row['row_id']] = $row['descripcion'];
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


?>

  <!-- footer end-->
