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



$goTos = array('main');

$go ="main";

if (!empty($_REQUEST['goTo'])) {
  $goto = TRIM($_REQUEST['goTo']);
  if (in_array($goto, $goTos)){
    $go = $goto;
  }
}

require_once $go.".php";

require_once "footer.php";

?>

  <!-- footer end-->
