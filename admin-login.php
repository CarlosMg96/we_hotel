<?php


$err="<br>";



if (!empty($wepass)){
  $err="<span class=err>Contraseña incorrecta!</span>";
} else{
  $wepass='';
}


echo <<<HTML
<style>
  .err{ color:darkred; }
</style>
<div style="width:100%;height:120px"></div>

<div style="width:80%;margin-left: 10%;">

  <form method=post>
    
    $err
    <p>
      Favor de ingresar tu contraseña:
    </p>
    <input type=text placeholder="contraseña" name="wepass" id="wepass" value="$wepass" style="padding:0.4em 1em; border:1px solid gray; font-size:1.2em; outline:0;" maxlength="20">
    <br><br>
    <input class=boton1 type="submit" value="Acceder" style="padding:0.4em 2em">
    <br><br><br><br>
  </form>
  We.Mex.2023
</div>

<div style="width:100%;height:200px"></div>

HTML;



?>
