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
      <div style="width:100%;  position:relative; height:7em">
      </div>
HTML;

    $error = 0;

    if (empty($_REQUEST['h'])) { 
      $error = 1; 
    } else {
      $h = TRIM($_REQUEST['h']);  
    }
    
    if (!is_numeric($h)) {
      $error = 1; 
    }

    if ($error > 0){
      echo "<center>Esta referencia no existe!<br><br><br><br><a href='./' style='color:#DEB666'>regresar</a></center><br><br><br>";
      require_once "footer.php"; exit;
    }


    if (!empty($_REQUEST['cid'])) { 
      $cid0 = TRIM($_REQUEST['cid']);  
      $cid0 = intval($cid0);
      if ($cid0>0) {
        $cid = $cid0;
      }
    }


     $comentarios = '';
    
    $query = "SELECT row_id, habitacion, capacidad, comentarios FROM habitaciones WHERE row_id='$h' ";
    $result=mysqli_query($cx,$query) or die('err0:'.mysqli_error($cx));
    while ($row=mysqli_fetch_array($result)){
      $habitacion = TRIM($row['habitacion']);
      $capcidad = TRIM($row['capacidad']);
      if (!empty($row['comentarios'])){
        $comentarios =  TRIM($row['comentarios']);  
      }
      
    }


    $query = "SELECT row_id, habitacion_id, caracteristicas, precio, hotel FROM caracteristicas WHERE habitacion_id='$h' ";
    $result=mysqli_query($cx,$query) or die('err0:'.mysqli_error($cx));
    $variantes =0;
    while ($row=mysqli_fetch_array($result)){
      $cid1 = $row['row_id'];
      
      $Caracteristicas0[$cid1] =  TRIM($row['caracteristicas']);
      $Precio[$cid1] = intval(TRIM($row['precio']));
      $hotel = TRIM($row['hotel']);
      $Habitacion_id[$cid1] = TRIM($row['habitacion_id']);
      $variantes++;
    }

    $Loc = $hotel;
    $location = strtolower($hotel);
    $location = str_replace(' ','',$location);

    

  $maindir = "im/habitaciones/$location";

    if (!is_dir($maindir)) { echo "<hr><b>$maindir</b> is no dir!<br>";}

    if ($dh = opendir($maindir)){
      while (($file = readdir($dh)) !== false){
        //echo "file $file -ext $ext<br>";      
          if (str_contains($file, '-')){
            list($cid1, $foldername) = explode('-', $file);
            $imFolder[$cid1] = $file;


            if (!empty($Caracteristicas0[$cid1])){
              $Caracteristicas[$cid1] = $Caracteristicas0[$cid1];
              //echo "<br> cars = ".  $Caracteristicas0[$cid1];
            }
            

            if (empty($firstcid )) {
              if (!empty($Precio[$cid1])){
                $firstcid = $cid1;
              }
            }
          }
      }
      closedir($dh);
    }

    if (empty($cid)) { $cid = $firstcid;}


  $cImages = array();
  $Images =  array('jpg', 'png');

  foreach($imFolder as $cid1 => $folder){


    if ($dh = opendir($maindir.'/'.$folder)){
      while (($file = readdir($dh)) !== false){

        $ext = substr($file,-3);$ext = strtolower($ext);
        //echo "file $file -ext $ext<br>";      
          if (in_array($ext, $Images)){
            if ($cid==$cid1){
              $cImages[] = $maindir.'/'.$folder.'/'.$file;  
            }
            
          }
      }
      closedir($dh);
    }

  }

  asort($cImages);

  $cFoto = '';
  if (!empty($imFolder[$cid])){
    $cFoto = $imFolder[$cid].'/'.$cid.'.jpg';  
//    echo "cFoto = $maindir/".$imFolder[$cid].'/'.$cid.'.jpg';
  } else {
//    echo "<hr><hr> No image! $maindir/ imFolder [ $cid ] / $cid .jpg";
  }


  $precio1 = number_format($Precio[$cid]);

echo <<<HTML
    <div style="width:90%; margin-left:5%;" data-aos="fade-down" data-aos-duration="1700">
      <span class="title1"> $habitacion    </span>
      <br><span class="title2">{$Caracteristicas[$cid]}</span>
    </div>
    <br>
    
    
  
    <div style="width:90%; margin-left:5%;" class="flex1" >
      <div data-aos="fade-left" data-aos-duration="3700" class="a50" style="margin-top:0.8em;min-height:300px;background-image:url('$maindir/$cFoto'); background-size:cover;">
      </div>
      <div class="a40" style="margin-top:0.8em;">
        <span style='font-size:2em'><b>$ $precio1 MXN</b></span> por noche
        <br><br>
        <span style="color:gray; font-size:0.9em"><i class="fa-solid fa-user"></i> &nbsp;  2 personas</span>
        <br><br>
        <p>
          Si planeas compartir la habitación, ten en cuenta que se aplicará un cargo extra para la 3ª y 4ª persona. Pero no te preocupes, ¡nuestro equipo de recepción te ayudará con cualquier pregunta que tengas!
        </p>
        <p>
          Aceptamos tarjetas de crédito Visa y Mastercard, así como efectivo. Además, para cualquier cargo inesperado, requerimos una tarjeta de crédito, una tarjeta de débito o un depósito en efectivo al momento del check-in. También puede ser necesario presentar una identificación oficial con fotografía.
        </p>
        
HTML;

  if ($variantes < 2){
    echo "<b>".$Caracteristicas[$cid]."</b>";
  } else {

  
echo <<<HTML

      <p>
          Selecciona la opción que prefieras:<br>
        <a onmouseup="reveal('myOptions');">
          <input type="button" class="boton2 botonsm" value="{$Caracteristicas[$cid]}  &nbsp; &nbsp; &nbsp; " 
          style='color:black;border-color:black;z-index:4;width:90%; max-width:500px'>
          <i class='fa-solid fa-chevron-down' style='margin-left:-2.4em; user-select: none;'></i>
        </a><br>
        <div id="myOptions" style="display:none; margin-top:-0.8em">
HTML;

        foreach($Caracteristicas as $cid1 => $cars){
          if ($cid1 != $cid){

echo <<<HTML
  <a href="habitacion?h=$h&cid=$cid1">
  <input type='button' class='boton2 botonsm' value='{$Caracteristicas[$cid1]}' style='width:90%; max-width:500px margin-top:0.4em'>
  </a><br>

HTML;

          }
        }

echo "</div>";        
      
} 

$rLink = "https://wubook.net/wbkd/wbk/?lcode=1515700178&lang=es";

if ($location=="aeropuerto"){
  $rLink = "https://wubook.net/wbkd/wbk/?lcode=1496258226&lang=es";  
}

if ($location=="puertomorelos"){
  $rLink = "https://hotels.cloudbeds.com/es/reservation/sagBke?currency=USD";  
}


echo <<<HTML
          <br><br>
        <input type="button" class="boton2 botonsm" value="Políticas del hotel"  onmouseup="Politicas();" />
        <a href="$rLink">
          <input type="button" class="boton1 botonsm" value="Reservar ahora" />
        </a>
                
        </p>
      </div>
    </div>    

HTML;

  $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $html_link = "\nVisita:\n\n$actual_link";
  
  $actual_link = urlencode($actual_link);
  $html_link = urlencode($html_link);

echo <<<HTML

    <div style="width:90%; margin-left:5%; margin-top:0.8em; font-weight:100" data-aos="fade-down" data-aos-duration="1700">
      Compartir 

        <a href="whatsapp://send?text=$actual_link" data-action="share/whatsapp/share">
          <img src="im/ic-wa-black.png" style="width:22px; vertical-align:middle; margin-left:0.7em">
        </a>

        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=$actual_link;src=sdkpreparse" class="fb-xfbml-parse-ignore">
          <img src="im/ic-fb-black.png" style="width:22px; vertical-align:middle; margin-left:0.7em">
        </a>

       <a href="mailto:?subject=Hoteles%20We&body=$html_link">
          <img src="im/ic-mail-black.png" style="width:22px; vertical-align:middle; margin-left:0.7em">
       </a>
    </div>


    <!--
    <a href="whatsapp://send?text=The text to share!" data-action="share/whatsapp/share">Share via Whatsapp</a>
     -->

<!-- <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="" data-size=""><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div> -->

    <!-- <a href="mailto:someone@yoursite.com?cc=someoneelse@theirsite.com, another@thatsite.com, me@mysite.com&bcc=lastperson@theirsite.com&subject=Big%20News&body=Body-goes-here">Email Us</a> -->


    

    <div style="width:100%; height:80px"></div>


<style>
  .glide__slide_ev1 { min-height: 350px;width:100%; }
  .ev1 {  background-color: transparent;  width:94%; height:94%;  margin:3%;  }
  .ev-foto1 {  width:100%;height:86%;  background-size: cover; background-position: center;  }
  .ev-main1 { position: relative; width:90%;margin:1em auto;  text-align: left; font-weight:100;  line-height: 1.4em; }
  .ev-title1 {  font-size:0.9em;  color: #DEB666; }
  .glide__arrows1 {width:100px;top:310px; right:10px;  position:absolute; height:60px;}
</style>


<div style="width:100%; background-color:#f8f8f8">
  
  <div style="width:100%; height:80px"></div>

  <div class="flex1" style="width:86%; text-align:center; margin-left:7%">

    <div class="a40" style="text-align: left;">
      <span class=title1>Amenidades con las que cuenta esta habitación<br></span>
      </p>

    <table class="icontable" style="width:100%; text-align:left">
      <tr>
        <td class="ic2" style="width:5%"><i class="fa-solid fa-box-archive"></i></td>
          <td>Caja fuerte</td>
      
        <td class="ic2"><i class="fa-solid fa-mug-hot"></i></td>
          <td>Cafetera</td>
      </tr>

      <tr>
        <td class="ic2"><i class="fa-solid fa-wind"></i></td>
          <td>Aire acondicionado</td>
      
        <td class="ic2"><i class="fa-solid fa-tv"></i></td>
          <td>Televisión por cable</td>
      </tr>

      <tr>
        <td class="ic2"><i class="fa-solid fa-wifi"></i></td>
          <td>WiFi</td>
      
        <td class="ic2"><i class="fa-solid fa-couch"></i></td>
          <td>Sillón</td>
      </tr>

      <tr>
        <td class="ic2"><i class="fa-solid fa-toilet-portable"></i></td>
          <td>Armario</td>
      
        <td class="ic2"><i class="fa-solid fa-star"></i></td>
          <td>Espejo de vanidad</td>
      </tr>

      <tr>
        <td class="ic2"><i class="fa-solid fa-bath"></i></td>
          <td>Bañera o ducha</td>
      
        <td class="ic2"><i class="fa-solid fa-phone"></i></td>
          <td>Teléfono</td>
      </tr>

    </table>


    </div>

HTML;

$cntFotos=0;
foreach ($cImages as $foto) {
  $cntFotos++;
}


echo <<<HTML

    <div class="a50" >
      
      <div class="glide eventos" style="width:90%; ">

      <div class="glide__arrows1" data-glide-el="controls">
            <button id="slideBack" class="glide__arrow glide__arrow--left" data-glide-dir="<"><img class="arr" src="im/prev.svg"></button>
            <button id="slideForward" class="glide__arrow glide__arrow--right" data-glide-dir=">"><img class="arr" src="im/next.svg"></button>
      </div>

      <div class="glide__bullets" data-glide-el="controls[nav]">
        
HTML;
  
  for ($x=1; $x <=$cntFotos; $x++){
     echo "<button class='glide__bullet' data-glide-dir='=$x'></button>";
  }


echo <<<HTML

      </div>

      <div class="glide__track" data-glide-el="track" >
        <ul class="glide__slides" >

HTML;



$consec =1;
foreach ($cImages as $foto) {

  

echo <<<HTML

          <li class="glide__slide_ev1" >
            <div class="ev1" >
              <div class="ev-foto1" style="background-image:url('$foto');">
              </div>
              <div class="ev-main1">
                <span class="ev-title1">Fotografías de la habitación - $consec / $cntFotos</span>
              </div>
            </div>

          </li>
HTML;

$consec++;

}




echo <<<HTML

        </ul>
      </div> <!-- glide track -->

    </div> <!-- glide -->

    </div> <!-- a60 -->

  </div>

      <div style="width:100%; height:180px; clear:both;"></div>

<center><span class=title1>Otras habitaciones en We $Loc:</span></center>

HTML;


require_once "habitaciones.php";

echo <<<HTML



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
