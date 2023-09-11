<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$fechaToday=date('Y-m-dH:i:s');
require_once "functions.php";

$r = rand(10000,9999);
$rr = time().$r;

if (!empty($_POST['cerrarsesion'])){
  $aid='';
  $_SESSION['aid'] = '';
  $_POST['cerrarsesion'] = '';
}

$m=1;
if (!empty($_REQUEST['m'])){
  $m = $_REQUEST['m'];
}

$aid='';
if (!empty($_REQUEST['wepass'])){
  $wepass = TRIM($_REQUEST['wepass']);
  $wepass = substr($wepass, 0,15);
  if ($wepass=='We.Mex.2023'){
    $aid=1;
    $_SESSION['aid'] = $aid;
  }
}

if (!empty($_SESSION['aid'])){
  $aid = $_SESSION['aid'];
}

require_once "admin-header.php";


$goTos = array('main', 'admin-habitaciones', 'admin-eventos', 'admin-atracciones' );

$go ="admin-main";



if (!empty($_REQUEST['goTo'])) {
  $goto = TRIM($_REQUEST['goTo']);
  if (in_array($goto, $goTos)){
    $go = $goto;
  }
}

if (empty($aid)){
  require_once "admin-login.php";
} else {
  require_once $go.".php";  
}


require_once "admin-footer.php";

?>

  <!-- footer end-->
