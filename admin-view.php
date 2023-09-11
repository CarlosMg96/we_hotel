<?php

require_once "functions.php";


if (!empty($_POST['pid'])){ $pid = TRIM($_POST['pid']); }
if (!empty($_POST['tb'])){  $tb = TRIM($_POST['tb']); }


if (empty($pid) || empty($tb)){
  echo "No Data!"; exit;
}

// pic, pic2.. pic5

  $query ="SELECT st FROM $tb WHERE row_id='$pid' ";
  $view='';
  $result=mysqli_query($cx,$query) or die('err0:'.mysqli_error($cx));
  while ($row=mysqli_fetch_array($result)){
    $view = $row['st'];
  }
// nm cat dsc pr stat

  if ($view==2){
    $upd = "UPDATE $tb SET st = NULL WHERE row_id = '$pid' ";  
    $stat = "0";
  }else {
    $upd = "UPDATE $tb SET st = '2' WHERE row_id = '$pid' ";
    $stat = "2";
  }
    // $query = "UPDATE $tb SET $field='$value' WHERE row_id='$pid' " ;  
     $result = mysqli_query($cx,$upd) or die(mysqli_error($cx));


     $message = $upd;

    $response = array(
        'stat' => $stat,
        'message' => $message,
        'res' => $result
    );

      
    echo json_encode($response);
  

?>
