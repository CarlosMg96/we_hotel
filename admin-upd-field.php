<?php

require_once "functions.php";

//if (!$_SESSION['admin']) { exit; }
//data: {'pid':pid, 'tb':table1, 'field':field1, 'value':value1},

$fields = array('pid', 'tb', 'field', 'value');

foreach ($_POST as $key => $input_arr) {
  $_POST[$key] = TRIM(addslashes($input_arr));
  if(in_array($key, $fields)) {
    $$key = TRIM($_POST[$key]);
  }
} 


// nm cat dsc pr stat

    $query = "UPDATE $tb SET $field='$value' WHERE row_id='$pid' " ;  
    $result=mysqli_query($cx,$query) or die(mysqli_error($cx));

    echo "Success! - $query";

?>
