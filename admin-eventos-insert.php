<?php

require_once "functions.php";

$fields = array('evento', 'cuando', 'donde', 'descripcion', 'direccion', 'sede', 'st');

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
  $query = "INSERT INTO eventos (st,sede, evento, cuando, donde, descripcion, direccion, thistime) "; 
  $query .= " VALUES ('0', '$sede', '$evento', '$cuando', '$donde', '$descripcion', '$direccion', '$hora_mysql')";
} else {
  $query = "UPDATE eventos SET st='$st' sede='$sede', evento='$evento', cuando='$cuando', donde='$donde', descripcion='$descripcion', direccion='$direccion' WHERE row_id='$pid' " ;  
}

    $result=mysqli_query($cx,$query) or die(mysqli_error($cx));

    if ($pid=='new') {
      $pid = $cx->insert_id;
    }

    echo "$pid";

?>
