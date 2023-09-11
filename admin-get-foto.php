<?php

require_once "functions.php";

if (!empty($_POST['pid'])){ $pid = TRIM($_POST['pid']); }
if (!empty($_POST['n'])){ $n = TRIM($_POST['n']); }
if (!empty($_POST['tb'])){  $tb = TRIM($_POST['tb']); }
if (!empty($_POST['picdir'])){  $picdir = TRIM($_POST['picdir']); }

if (empty($pid) || empty($n) || empty($tb)){
  echo "No Data!"; exit;
}

// pic, pic2.. pic5

  $pic = "pic";
  if ($n>1){   $pic="pic".$n;  }
  

  $query ="SELECT $pic FROM $tb WHERE row_id='$pid' ";
  $result=mysqli_query($cx,$query) or die(mysqli_error($cx));
    
  while ($row=mysqli_fetch_array($result)){
      $foto = $row[0];
  }
  
  if (!is_file("$picdir/$foto")){
    $foto = "";
  }

  echo $foto;



?>
