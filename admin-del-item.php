<?php

error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require_once "functions.php";


if (!empty($_POST['pid'])){ $pid = TRIM($_POST['pid']); }
if (!empty($_POST['tb'])){ $tb = TRIM($_POST['tb']); }

if (empty($pid) || empty($tb)  ){
  echo "No Data"; exit;
}


$stat = "ok";
$message = "";
  

  $query ="DELETE FROM $tb WHERE row_id='$pid' ";
  $result=mysqli_query($cx,$query) or die(mysqli_error($cx));
    
  
        //while ($row=mysqli_fetch_array($result)){}

    
    echo "stat: $stat, message: $message";



?>
