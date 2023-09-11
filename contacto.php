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
       <span class=title1>Contacto</span>
       
    </div>
  </div>


  <div style="height:30px; width:100%;"></div>


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
        <tr data-aos="fade-down" data-aos-duration="1200" >
          <td class="ic"><i class="fa-solid fa-envelope"></i></td>
          <td><a href="mailto:reservaciones@wehotel.com.mx">reservaciones@wehotel.com.mx</a></td>
        </tr>
        <tr data-aos="fade-down" data-aos-duration="700" >
          <td style='width:10%' class="ic"><i class="fa-solid fa-phone"></i></td>
          <td style="line-height: 1.5em;">
              Acapulco: &nbsp; <a href="tel:+52 74 4485-1387">74 4485 - 1387</a>
              <br>Aeropuerto: &nbsp; <a href="tel:+52 74 4485-1312">74 4485 - 1312</a>
              <br>Puerto Morelos: &nbsp;  <a href="tel:+52 80 0726-2312">80 0726 - 2312</a>
          </td>
        </tr>
        
        <tr data-aos="fade-down" data-aos-duration="1700" >
          <td class="ic"><i class="fa-solid fa-location-dot"></i></td>

          <td>Acapulco · Aeropuerto · Puerto Morelos</td>
        </tr>
      </table>      
    </div>
    
  </div>
  <div style="width:100%; height:150px"></div>
  <img src="im/we_hotels_45.jpg" style="width:100px; position:absolute; bottom:0px; right:0px">
</div>




HTML;


require_once "footer.php";

?>

  <!-- footer end-->
