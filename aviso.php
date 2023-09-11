<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$fechaToday=date('Y-m-dH:i:s');

$r = rand(10000,9999);
$rr = time().$r;

echo <<<HTML
<img src="im/we-hotels-logo-gris.svg" style="width:270px; ">
<br><br>
<h1 class="golden">Aviso de Privacidad</h1>
<br>
<p>
<div>
  
  <p>
    El hotel no se hace responsable por valores no depositados dentro de la caja
    de seguridad ubicadas en la habitación.
</p>
<br/>
<br/>
<p>
    We Acapulco tratará sus datos personales para las siguientes finalidades (i)
    solicitar, cambiar o cancelar servicios; (ii) efectuar pagos; (iii)
    solicitar factura o comprobante fiscal digital, (iv) contactar el servicio
    de atención a clientes; (v) enviarle información sobre nuestros productos y
    servicios con fines mercadotécnicos, publicitarios o de prospección
    comercial, (viii) recolectar información de tarjetas de débito o tarjetas de
    crédito utilizadas para el pago de servicio. Usted podrá ejercer sus
    derechos de acceso, rectificación, cancelación y oposición al tratamiento de
    sus datos personales, así como limitar su uso y divulgación a través de los
    medios que nuestro departamento de protección de datos personales pone a su
    disposición en nuestro aviso de privacidad completo que podrá consultar,
    junto con sus modificaciones, en el Front Desk del hotel.
</p>
<br/>
<br/>
<p>
    LEY APLICABLE Y COMPETENCIA. Todos los derechos y obligaciones que surjan de
    este contrato y de los servicios y comodidades proporcionadas por este
    hotel, ya sea creadas por contrato, obligaciones y responsabilidad civil y/o
    conducta negligente serán regidas por las leyes de Guerrero y de Acapulco,
    sin importar lo dispuesto por las leyes de derecho conflictual. Al firmar
    esta ficha de registro, usted consciente de manera irrevocable a la
    exclusividad, competencia y jurisdicción de las cortes locales, estatales y
    federales ubicadas en Acapulco Guerrero, y cada parte acuerda en no objetar
    a la jurisdicción y competencia de dichas cortes. Esta disposición obliga al
    huésped firmante y a todos aquellos que lo acompañen dentro de las
    instalaciones del hotel. Al firmar este registro estoy de acuerdo con el
    reglamento interior del hotel.Estoy de acuerdo en desocupar mi habitación a
    las 12:00 hrs.
</p>
  
</div>  
</p>
<p style="text-align: center;">
  <br /><br />
  <a onmouseup="$('#emptyModal0').fadeOut();" style='color:#DEB666; cursor:pointer;'>
    [ cerrar ] 
    
  </a>
  <br /><br /><br /><br />
</p>

HTML;


?>

  <!-- footer end-->
