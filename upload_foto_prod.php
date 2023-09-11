<?php
require_once "functions.php";

ini_set('upload_max_filesize', '30M');
ini_set('post_max_size', '30M');

$pid = $_POST['pid'];
$n = $_POST['n'];
$upto = $_POST['upto'];

$ds = DIRECTORY_SEPARATOR;
$storeFolder = $upto;

    $myfile = fopen("upload-test.txt", "a") or die("Unable to open file!");
    $txt = "Step 0! (pid=$pid, n=$n, upto=$upto) $hora_mysql \n";
    $txt .= "------------------------------\n";fwrite($myfile, $txt);fclose($myfile);

   if (!empty($_FILES)) {
       // temporary file name of the file on the server. This is just a placeholder on your server until you process the file

        $myfile = fopen("upload-test.txt", "a") or die("Unable to open file!");
        $txt = "Step 1! (pid=$pid, n=$n, upto=$upto) $hora_mysql \n";
        $txt .= "------------------------------\n";fwrite($myfile, $txt);fclose($myfile);

         $tempFile = $_FILES['file']['tmp_name'];  
        
       // define where the final storage destination of the file will be
         $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;   

         // prep file name, check for duplicates, rename duplicates

             // remove white spaces from filename and replaces with hyphen
            $file_name = preg_replace('/\s+/', '-', $_FILES['file']['name']);  
            $file_name = preg_replace('/\s /', '-', $_FILES['file']['name']);  
            $extension = pathinfo($file_name, PATHINFO_EXTENSION); 
            $_SESSION["xd"] = $file_name;
             // loop to rename file if file is already existent
               $actual_name = pathinfo($file_name,PATHINFO_FILENAME);
               $original_name = $actual_name;
               
//          array_map('unlink', glob("$targetPath/*.jpg")); 
//          array_map('unlink', glob("$targetPath/*.png")); 

      // process and move original file to directory
          $targetFile =  $targetPath . $file_name;
          move_uploaded_file($tempFile,$targetFile);

            $myfile = fopen("upload-test.txt", "a") or die("Unable to open file!");
            $txt = "Step 2! (pid=$pid, n=$n, upto=$upto) $hora_mysql \n";
            $txt .= "------------------------------\n";fwrite($myfile, $txt);fclose($myfile);

/*
          if ($pid=='new') {
            $query="INSERT INTO catalog (pic) VALUES ('$file_name') "; 
            $result=mysqli_query($cx,$query) or die(mysqli_error($cx));
            $last_id = $cx->insert_id;
          } else {
            $query="UPDATE catalog SET  pic='$file_name' WHERE row_id='$pid' ";
            $result=mysqli_query($cx,$query) or die(mysqli_error($cx));
          }
            
*/          


      // start resize process

         // makes folders for thumbs if none exists
/*
            $storeFolder2 = 'files/'.$storeFolder;
            if (!file_exists($storeFolder2)) {
                mkdir($storeFolder2, 0755, true);
            } 
*/
        
   }



?>