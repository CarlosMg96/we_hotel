<?php

require_once "functions.php";

$fields = array('atraccion', 'km', 'descripcion', 'direccion', 'sede', 'st');

foreach ($_POST as $key => $input_arr) {
  if(in_array($key, $fields)) {
    $_POST[$key] = TRIM(addslashes($input_arr));
    $$key = $_POST[$key];
  }
} 

if (empty($pid)){ $pid = 'new';}

if (empty($stat)) { $stat = 1;}
if (empty($pr)) { $pr = 0;}
// nm cat dsc pr stat
if ($pid=='new') {
  $query = "INSERT INTO atracciones (st, sede, atraccion, km,  descripcion, direccion, thistime) "; 
  $query .= " VALUES ('0', '$sede', '$atraccion', '$km', '$descripcion', '$direccion', '$hora_mysql')";
} else {
  $query = "UPDATE atracciones SET st='$st' sede='$sede', atraccion='$atraccion', km='$km', descripcion='$descripcion', direccion='$direccion' WHERE row_id='$pid' " ;  
}

    $result=mysqli_query($cx,$query) or die(mysqli_error($cx));

    if ($pid=='new') {
      $pid = $cx->insert_id;
    }

    echo "$pid";

?>
