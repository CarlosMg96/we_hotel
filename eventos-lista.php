<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$fechaToday=date('Y-m-dH:i:s');

require_once "functions.php";

$r = rand(10000,9999);
$rr = time().$r;

$mysearch = '';

if (!empty($_POST['buscar'])){
  $srch = TRIM($_POST['buscar']);
  
    $mysearch = " WHERE sede like '%$srch%' or evento like '%$srch%' or descripcion like '%$srch%' or direccion like '%$srch%' or donde like '%$srch%' or cuando like '%$srch%' "; 
    echo "<span style='color:silver'>&nbsp; &nbsp; Buscar: <b>$srch</b> </span>";
  
}

$tb="eventos";
$picdir="im/eventos";

$ascdesc = 'DESC';
$order = 'thistime';

if (!empty($_POST['srch'])) { $srch = TRIM($_POST['srch']); }
if (!empty($_POST['ascdesc'])) { $ascdesc = TRIM($_POST['ascdesc']); }
if (!empty($_POST['order'])) { $order = TRIM($_POST['order']); }


  $numDatos = 0; $Datos = $Direccion = array(); 

  

  $query =   "SELECT row_id, st, sede, evento, donde, cuando, direccion, descripcion,thistime, pic, pic2, pic3, pic4, pic5 FROM eventos $mysearch ORDER BY $order $ascdesc";


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

<table class="tPedidos">
  <tr>
    <th style='width:120px'></th>
    <th style='width:20px'></th>
    <th></th>
  </tr>

HTML;

foreach($Datos as $pid => $detalle){
  list($sede, $evento, $donde, $cuando, $time, $st) = explode('|',$detalle);



  list($pic, $pic2, $pic3, $pic4, $pic5) = explode('|',$Pics[$pid]);
  $pA = "style=\"background-image: url('$picdir/";
  $pB = "');\" ";

  $ppic = $ppic2 = $ppic3 = $ppic4 = $ppic5 = '';

  

  if (!(is_file($picdir.'/'.$pic))){ $pic='';} //else { echo "<img src='$picdir/$pic'>";}
  if (!(is_file($picdir.'/'.$pic2))){ $pic2='';}
  if (!(is_file($picdir.'/'.$pic3))){ $pic3='';}
  if (!(is_file($picdir.'/'.$pic4))){ $pic4='';}
  if (!(is_file($picdir.'/'.$pic5))){ $pic5='';}
  

  if (!empty($pic)) {  $ppic= $pA.$pic.$pB; }
  if (!empty($pic2)) {  $ppic2= $pA.$pic2.$pB; }
  if (!empty($pic3)) {  $ppic3= $pA.$pic3.$pB; }
  if (!empty($pic4)) {  $ppic4= $pA.$pic4.$pB; }
  if (!empty($pic5)) {  $ppic5= $pA.$pic5.$pB; }
  
  $op = ""; if ($St[$pid]==2){ $op="op30"; }




echo <<<HTML

  <tr class='rowP' num='$pid' id="row_$pid" style="vertical-align: top;">
    
    <td>

      <div class="mainPhoto p$pid" $ppic></div>
      <br>
      <table class="thumbsT">
        <tr>
          <td class="p_2_{$pid} pp" n="2" pid="$pid" $ppic2>&nbsp;</td>
          <td class="p_3_{$pid} pp" n="3" pid="$pid" $ppic3>&nbsp;</td>
          <td class="p_4_{$pid} pp" n="4" pid="$pid" $ppic4>&nbsp;</td>
          <td class="p_5_{$pid} pp" n="5" pid="$pid" $ppic5>&nbsp;</td>
        </tr>
      </table>

    </td>
    <td></td>
    <td>
        <span class="sede">$sede</span><br><br>
        <span class="eventoName">$evento</span>
        <br><span class="eventoDate">$cuando</span>
        <p>
          {$Descripcion[$pid]}
        </p>
       

       <b>$donde</b> 
       <br><span class="eventoAddress">
       {$Direccion[$pid]} 
       </span>
    
    </td>
  </tr>
  <tr>
    <td colspan=2></td>
    <td colspan=2 style="height:40px; border-bottom:1px solid #f0f0f0">
      
    </td>
  </tr>
HTML;

}

echo "</table>\n";


?>

  <!-- footer end-->
