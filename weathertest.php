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

echo <<<HTML

<div id=my_div></div>

<script type="text/javascript">
  

  $.ajax({
        url: 'https://www.theweather.com/wid_loader/f18c3e23ee79ca2b1ce5b08f40254229',
        method: "POST", dataType : "html",
        /* data: datos, */
        success: function (result) {  //true
                $('#my_div').html('loading...');
                setTimeout(function() {
                  $('#my_div').html(result);
                }, 1000);  
                
        }, error: function (d) {
             console.log ('error: '); console.log(d);
        }
    }); // ---------  ajax  

</script>


<div id="cont_f18c3e23ee79ca2b1ce5b08f40254229">
<script type="text/javascript" async src="https://www.theweather.com/wid_loader/f18c3e23ee79ca2b1ce5b08f40254229"></script>
</div>

HTML;


require_once "footer.php";

?>

  <!-- footer end-->
