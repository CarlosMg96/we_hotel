<?php

require_once "functions.php";

$fields = array('pid', 'foto', 'n', 'picdir', 'tb');

foreach ($_POST as $key => $input_arr) {
  $_POST[$key] = TRIM(addslashes($input_arr));
  if(in_array($key, $fields)) {
    $$key = $_POST[$key];
  }
} 

if (empty($pid) || empty($foto) || empty($n)|| empty($picdir)|| empty($tb)) {
  echo "No data!"; exit;
}else {


}


if ($pid=='new') {
  $query = "INSERT INTO $tb (pic) VALUES ('$foto')";
  $result=mysqli_query($cx,$query) or die(mysqli_error($cx));
  $last_id = $cx->insert_id;
  echo $last_id;
} else {
  if ($n<2) {
    $query = "UPDATE $tb SET pic='$foto' WHERE row_id='$pid' " ;
  } else {
    $query = "UPDATE $tb SET pic".$n."='$foto' WHERE row_id='$pid' " ;
  }
    $result=mysqli_query($cx,$query) or die(mysqli_error($cx));
    echo $pid;  
  
}



?>
