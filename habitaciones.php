<?php

echo <<<HTML
<style type="text/css">

.hab {  background-color: white;  width:94%; height:94%;  margin:3%;  box-shadow: 1px -1px 10px 0px rgba(0,0,0,0.2); }
.hab-foto{  width:100%;height:220px;  background-size: cover; background-position: center;  }
.hab-main { position: relative; width:90%;margin:1em auto;  text-align: left; font-weight:100;  line-height: 1.4em; }
.hab-title {  font-size:1.2em;  color: #DEB666; }
.hab-tarifas {  font-size:0.9em; color:silver;  }
.hab-desde {  font-size:1.2em; color:black; }


</style>

HTML;

$Images = array ('jpg','png','gif');
$Images4 = array ('jpeg');

$cImages = $hImages = array();

$imFolder = array();
// Open a directory, and read its contents

$maindir = "im/habitaciones/$location";
// $dir = "gallery1";

  if (!is_dir($maindir)) { echo "<hr><b>$maindir</b> is no dir!<br>";}

  if ($dh = opendir($maindir)){
    while (($file = readdir($dh)) !== false){
      //echo "file $file -ext $ext<br>";     
        if (strpos($file, '-') !== false) { 
          list($cid, $foldername) = explode('-', $file);
          $imFolder[$cid] = $file;
          //echo   "::: $cid = ".$file . "<br>";         
        }
    }
    closedir($dh);
  }


  foreach($imFolder as $cid => $folder){

    if ($dh = opendir($maindir.'/'.$folder)){
      while (($file = readdir($dh)) !== false){

        $ext = substr($file,-3);$ext = strtolower($ext);
        //echo "file $file -ext $ext<br>";      
          if (in_array($ext, $Images)){
            $cImages[$cid][] = $maindir.'/'.$folder.'/'.$file;
          }
      }
      closedir($dh);
    }

  }

    $Habitacion =  array(); 
    $query = "SELECT row_id, habitacion, capacidad FROM habitaciones WHERE hotel='$Loc' ";
    $result=mysqli_query($cx,$query) or die('err0:'.mysqli_error($cx));
    while ($row=mysqli_fetch_array($result)){
      $Habitacion[$row['row_id']] = TRIM($row['habitacion']).'|'.TRIM($row['capacidad']);
    }

    $Caracteristicas = $cFoto = $Cs = array(); 
    $query = "SELECT row_id, habitacion_id, caracteristicas, precio FROM caracteristicas WHERE hotel='$Loc' ";
    $result=mysqli_query($cx,$query) or die('err0:'.mysqli_error($cx));
    while ($row=mysqli_fetch_array($result)){
      $cid = $row['row_id'];
      $Caracteristicas[$row['habitacion_id']][] = $cid.'|'.TRIM($row['caracteristicas']).'|'.TRIM($row['precio']);
      if (!empty($imFolder[$cid])){
        $cFoto[$cid] = $imFolder[$cid].'/'.$cid.'.jpg';  
        //echo "<br> (".$row['habitacion_id'].") $cid + cFoto[ $cid ] = ".$imFolder[$cid].'/'.$cid.'.jpg';  
      }
      
    }

$cnthab =0;
foreach ($Habitacion as $hid => $Hab){
      $cnthab++;
}

echo <<<HTML
    <div class="glide habitaciones">

      <div class="glide__arrows" data-glide-el="controls">
            <button id="slideBack" class="glide__arrow glide__arrow--left" data-glide-dir="<"><img class="arr" src="im/prev.svg"></button>
            <button id="slideForward" class="glide__arrow glide__arrow--right" data-glide-dir=">"><img class="arr" src="im/next.svg"></button>
      </div>

      <div class="glide__bullets" data-glide-el="controls[nav]">
HTML;

  for ($x=1; $x<=$cnthab;$x++){
    echo "<button class='glide__bullet' data-glide-dir='=$x'></button>";
  }
        

echo<<<HTML

      </div>

      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">

HTML;


// wifi 88AA9BE5uZKxyPTG

    $Cars = ""; 

    foreach ($Habitacion as $hid => $Hab){
      // echo $Hab.'<br>';
      $cnthab++;
      
      list($habitacion, $capacidad) = explode('|', $Hab);

      $minprice = 9999;
      foreach($Caracteristicas[$hid] as $Ca){
        list ($cid, $caract, $precio) = explode('|', $Ca);
          if ($precio < $minprice) { $minprice = $precio; }
          if (!empty($cFoto[$cid])){
            $lafoto = $cFoto[$cid];  
          }
      } // foreach $Ca


$minprice1 = number_format($minprice);

$rLink = "https://wubook.net/wbkd/wbk/?lcode=1515700178&lang=es";

if ($location=="aeropuerto"){
  $rLink = "https://wubook.net/wbkd/wbk/?lcode=1496258226&lang=es";  
}

if ($location=="puertomorelos"){
  $rLink = "https://hotels.cloudbeds.com/es/reservation/sagBke?currency=USD";  
}

echo <<<HTML

          <li class="glide__slide">
            <div class="hab">
              <div class="hab-foto" style="background-image:url('im/habitaciones/$location/$lafoto')">
                <div class="in-photo0">
                  <div class="in-photo">
                    <i class="fa-solid fa-user"></i> &nbsp;  $capacidad
                  </div>
<!--
                  <div class="in-photo">
                    <i class="fa-solid fa-bed"></i> &nbsp; Cama King size
                  </div>
-->
                </div>
              </div>
              <div class="hab-main">
                <span class=hab-title>$habitacion</span>
                <br><span class=hab-tarifas>Tarifas desde</span>
                <br><span class=hab-desde>$ $minprice1 MXN</span> 
                <br>
                <a href="$rLink">
                  <input type="button" class="boton1 botonsm" value="Reservar ahora" />
                </a>
                <a href="habitacion?h=$hid">
                  <input type="button" class="boton2 botonsm" value="Ver más" />
                </a>
              </div>
            </div>
          </li>
HTML;


        
      } // foreach $Hab

echo <<<HTML

        </ul>
      </div> <!-- glide track -->

    </div> <!-- glide -->



<script type="text/javascript">
var glide = new Glide(".habitaciones", {
  type: "carousel",
  focusAt: "center",
  perView: 3
});
glide.mount();
</script>

<div style="height:100px; width:100%"></div>

HTML;


?>


