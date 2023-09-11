<?php

$tb = "atracciones";
$picdir = "im/atracciones";

echo <<<HTML

<div style="width:80%; margin-left:10%">
  <h1>  ATRACCIONES </h1>

  <form method="post" id="backForm" style="float:right">
    <input type=hidden name="goTo" value="admin">
    <div style="width:120px; font-size:0.9em; cursor:pointer; padding:1.2em 0em;" onmouseup="$('#backForm').submit();">
    <img src="im/back.png" style="width:20px; vertical-align:middle;"> regresar
    </div>
  </form>

    <br>
    <h2>Nueva atraccion:</h2>
    <br>

    <form method="post" id="formAtracciones">
        <input type="radio" name="sede" value="Acapulco"> Acapulco &nbsp;
        <input type="radio" name="sede" value="Aeropuerto"> Aeropuerto &nbsp;
        <input type="radio" name="sede" value="Puerto Morelos"> Puerto Morelos &nbsp;
        <br><br>
    <div class=flex1 id="nuevo">
      <div class="a38">
        
        *Atracción:
        <br><input type=text name="atraccion" id="atraccion" maxlength="35">
        <br><br>
        Distancia (km) :
        <br><input type=text name="km" id="km" maxlength="35">
      </div>

      <div class="a38">
        Descripción :
        <br><textarea name="descripcion" id="descripcion" rows="3"></textarea>
        <br><br>
        Dirección :
        <br><textarea name="direccion" id="direccion" rows="3"></textarea>
      </div>
      <br><br>
  </div>
  <input class=boton1 type=button value="+ Agregar atracción" onmouseup="addNew()" style="padding:0.6em 2.4em">
  </form>
</div>

<!--<script src="./dropzone/dropzone_prod.js"></script>-->


<div id="subirbox" style="display:none; position:fixed; top:20px; width:500px; height:750px; margin-left:3%; z-index:1400; background-color:rgba(255,255,255,0.95); border-radius: 5px;box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.5);">
  
  <div id="bigPic" style="width:100%;height:300px; background-color: #fafafa;"></div>

  <div onmouseup="resetDzone()" 
  style='background-color:rgba(255,255,255,0.95); border-radius:1.4em;cursor:pointer; position:absolute; right:1em; top:1em; height:1.8em;width:1.8em; display:flex;text-align:center;padding:0.35em 0.4em; z-index:1000; ' />
    <img src="im/x.png" style="height:1.6em;">
  </div>

  <div style="width:100%; text-align: center; ">
    <div id="delButton">
    Eliminar foto! <img src="im/trash.png" style="vertical-align: middle; margin:0.4em 0em 0.4em 1em">
    </div>
  </div>  

  <form name="dzone" id="dzone" action="upload_foto_prod.php" class="dropzone">
    <input type=hidden name="pid" id="pid" value="333">
    <input type=hidden name="n" id="n" value="1">
    <input type=hidden name="maxnum" value="1">
    <input type=hidden name="upto" value="im/atracciones">
  </form>
</div>

<div style="width:100%; margin:3em auto; border-top:1px solid #DEB666"></div>

<input type="text" id="orden" readonly placeholder="orden" style="display:none">
<input type="text" id="ascdesc" readonly placeholder="ascdesc" value="ASC" style="display:none">
<input type="text" id="buscar" placeholder="buscar..." >

<input type=button class="boton2 thin" value="buscar"  onmouseup="loadList()">
<div id="Lista" style="width: 92%; margin-left:4%">
HTML;

require_once "admin-atracciones-lista.php";

echo <<<HTML
</div>

<script type="text/javascript">
  
function addNew(){

  var atraccion = $('#atraccion').val();
  var sede = $("input[name='sede']:checked").val();
  var err = "";

  if (!sede){ err += 'Favor de elegir sede <br>'; }
  if (!atraccion || atraccion.length < 3){  err += 'Favor de ingresar nombre de la atracción <br>';  }
  

  if (err.length > 1){
    swal.fire({icon: 'error',title: '',html: err});
  
  } else {
    var datos = $('#formAtracciones').serialize();
    $('#modal001').fadeIn();

    $.ajax({
        url: 'admin-atracciones-insert.php',
        method: "POST", dataType : "html",
        data: datos,
        success: function (result) {  //true
                document.getElementById('formAtracciones').reset();
                $('#modal001').fadeOut();
                 console.log(result);
                $('#bigPic').css('background-image','none');  
                subirFoto(result,'1');
        }, error: function (d) {
             console.log ('error: '); console.log(d);
        }
    }); // ---------  ajax  

  } // if err 
    
}  
</script>

HTML;


?>
