<?php
require_once "functions.php";

if (!empty($_POST['tb'])) { $tb = TRIM($_POST['tb']); }
if (!empty($_POST['picdir'])) { $picdir = TRIM($_POST['picdir']); }

if (empty($picdir) || empty($tb)  ){
  echo "No Data (pd=$picdir , tb=$tb)"; exit;
}

$ascdesc = 'DESC';
$order = 'thistime';

if (!empty($_POST['srch'])) { $srch = TRIM($_POST['srch']); }
if (!empty($_POST['ascdesc'])) { $ascdesc = TRIM($_POST['ascdesc']); }
if (!empty($_POST['order'])) { $order = TRIM($_POST['order']); }


  $numDatos = 0; $Datos = $Direccion = array(); 

  $mysearch = "";
  if (!empty($srch)){ 
    $mysearch = " WHERE row_id like '%$srch%' or atraccion like '%$srch%' or direccion like '%$srch%' or descripcion like '%$srch%' "; 
    echo "<span style='color:silver'>&nbsp; &nbsp; Buscar: <b>$srch</b> </span>";
  }

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
    <th onmouseup="$('#orden').val('row_id'); loadList();" style='width:30px'>ID</th>
    <th style='width:120px'>foto</th>
    <th onmouseup="$('#orden').val('evento'); loadList();">nombre</th>
    <th onmouseup="$('#orden').val('donde'); loadList();" style='width:100px'>donde</th>
    <th >cuándo</th>
    <th style='width:300px'>descripcion</th>
    <th></th>
  </tr>
HTML;

foreach($Datos as $pid => $detalle){
  list($sede, $evento, $donde, $cuando, $time, $st) = explode('|',$detalle);

  list($pic, $pic2, $pic3, $pic4, $pic5) = explode('|',$Pics[$pid]);
  $pA = "style=\"background-image: url('$picdir/";
  $pB = "');\" ";

  $ppic = $ppic2 = $ppic3 = $ppic4 = $ppic5 = '';

  

  if (!(is_file($picdir.'/'.$pic))){ $pic='';}
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
  <tr class='rowP $op' num='$pid' id="row_$pid" >
    <td class='tdP'>
      $pid
      <br>
      <!-- ({$St[$pid]})  $op     -->
    </td>
    <td>
      <div class="thumb p$pid" $ppic></div>
      <table class="thumbsT">
        <tr>
          <td class="p_2_{$pid} pp" n="2" pid="$pid" $ppic2>&nbsp;</td>
          <td class="p_3_{$pid} pp" n="3" pid="$pid" $ppic3>&nbsp;</td>
        </tr>
        <tr>
          <td class="p_4_{$pid} pp" n="4" pid="$pid" $ppic4>&nbsp;</td>
          <td class="p_5_{$pid} pp" n="5" pid="$pid" $ppic5>&nbsp;</td>
        </tr>
      </table>
    </td>
    <td ondblclick="doEdit('eventname', '$pid')" class='tdP' >
        <span style="color:#DEB666">  $sede</span><br><br>
        <span id="disp_eventname_$pid">$evento</span>
          <div id="edit_eventname_$pid" class="Edt" >
            <input id="eventname_$pid" value="$evento" type="text" /> <br>
        <input id="guardar_eventname_$pid" type="button" class="boton2 thin"
        onmouseup="upd('eventos','evento','eventname', '$pid')" value="guardar cambios" >
        <i id="spinner_eventname_$pid" class="fa-solid fa-spinner fa-spin spinner1" ></i>
        <i id="check_eventname_$pid" class="fa-solid fa-circle-check check1"></i>
       </div>
    </td> 

    <td class='tdP'> $donde <br><br> {$Direccion[$pid]} </td>
    <td class='tdP'> $cuando</td>
    <td class='tdP'> {$Descripcion[$pid]}</td>
    <td>
      <i id="view_eventname_$pid" class="fa-solid fa-eye" onmouseup="view('$pid');"></i>
      <br><br>
      <img src="im/trash.png" class="trash" style="margin:1em auto" onmouseup="delItem('$pid')">
    </td>
  </tr>
HTML;

}

echo "</table>\n";

echo "<br><br><br>\n";


echo "</div>";



?>
