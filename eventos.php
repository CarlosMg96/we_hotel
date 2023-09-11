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

<style type="text/css">
  .mainPhoto{
    width:200px; height: 200px;
    background-size: cover;
  }
  .pp{
    width:40px; height: 40px;
    background-size: cover;
    border:0px solid silver
  }
  .eventoName{
    font-size:1.4em;  color:#DEB666 ;
  }
  .eventoDate{
    font-size:1.1em;  color:silver ;
  }
  .eventoAddress{
    font-size:0.8em;  color:silver ;
  }
  @media only screen and (max-width: 1200px) {
    .mainPhoto{
      width:100px; height: 100px;
      background-size: cover;
    }
  }
</style>
      
      <!-- background-image: url('im/diagonals.png');background-size: cover;  -->
      <div style="width:100%;  position:relative; height:4.3em">
      </div>

  <div style="width:100%; height:300px; background-image:url('im/headers-4.jpg'); background-size:cover; text-align: center; overflow:hidden;">
    <div data-aos="fade-in" data-aos-duration="3700"  style="width:80%;margin:7em auto; text-align:left">
       <span class=title1>Eventos</span>
       <br>
       <span class=title2>Oportunidades de conocer y divertirse</span>
    </div>
  </div>

  <div style="width:80%; margin:3em auto">
HTML;

$tb="eventos";
$picdir="im/eventos";

$ascdesc = 'DESC';
$order = 'thistime';

if (!empty($_POST['srch'])) { $srch = TRIM($_POST['srch']); }
if (!empty($_POST['ascdesc'])) { $ascdesc = TRIM($_POST['ascdesc']); }
if (!empty($_POST['order'])) { $order = TRIM($_POST['order']); }


  $numDatos = 0; $Datos = $Direccion = array(); 

  $mysearch = "";
  if (!empty($srch)){ 
    $mysearch = " AND row_id like '%$srch%' or atraccion like '%$srch%' or direccion like '%$srch%' or descripcion like '%$srch%' "; 
    echo "<span style='color:silver'>&nbsp; &nbsp; Buscar: <b>$srch</b> </span>";
  }

  $query =   "SELECT row_id, st, sede, evento, donde, cuando, direccion, descripcion,thistime, pic, pic2, pic3, pic4, pic5 FROM eventos WHERE st != 2 $mysearch ORDER BY $order $ascdesc";


  $result=mysqli_query($cx,$query) or die('err0:'.mysqli_error($cx));
  while ($row=mysqli_fetch_array($result)){
    $numDatos ++;
    $Datos[$row[0]] = $row['sede'].'|'.$row['evento'].'|'.$row['donde'].'|'.$row['cuando'].'|'.$row['thistime'].'|'.$row['st'];
    $Direccion[$row[0]] = $row['direccion'];
    $Descripcion[$row[0]] = $row['descripcion'];
    $Pics[$row[0]] = $row['pic'].'|'.$row['pic2'].'|'.$row['pic3'].'|'.$row['pic4'].'|'.$row['pic5'];
    $St[$row[0]] = $row['st'];
  }


echo <<<HTML

<input type=text id=buscar name=buscar placeholder="buscar..."  style="outline:none; padding:0.4em 1em; border:1px solid silver; font-size:1.2em; border-radius:1em;">
<br><br>

<div id="eventosLista">
HTML;

require_once "eventos-lista.php";

echo "</div><br><br><br>\n";


echo "</div>";


echo<<<HTML

  </div>


<script>
  $("#buscar").on('keyup', function (e) {
    if (e.key === 'Enter' || e.keyCode === 13) {
            var buscar = $('#buscar').val();
            $.ajax({
                url: 'eventos-lista.php',
                method: "POST", dataType : "html",
                data: {'buscar':buscar},
                success: function (result) {  //true
                      $('#eventosLista').html(result);
                }, error: function (d) {
                     console.log ('error: '); console.log(d);
                }
          }); // ---------  ajax  

            
    }
  });

    
  
</script>

HTML;


require_once "footer.php";

?>

  <!-- footer end-->
