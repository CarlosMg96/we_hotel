<?php

$index = 0;
if (!empty($_REQUEST['index'])){
  $index = $_REQUEST['index'];  
}

switch ($index) {
  case 0:
echo <<<HTML
<span class=title1>WE ACAPULCO<br></span>
                  <br>
                  <span class=title2>Uno de los destinos más icónicos de México</span>
                  <p>
                    Ya sea por placer, trabajo, o ambos, disfruta de una estancia inolvidable en la playa
                  </p>
HTML;
break;

case 1:

echo <<<HTML
<span class=title1>WE AEROPUERTO<br></span>
                  <br>
                  <span class=title2>Bienvenidos, pasajeros</span>
                  <p>
                    Todo el confort y descanso que necesitas, frente a la Terminal 1.
                  </p>
HTML;

break;

default:

echo <<<HTML

<span class=title1>WE PUERTO MORELOS<br></span>
                  <br>
                  <span class=title2>Arena blanca y aguas cristalinas</span>
                  <p>
                    Disfruta el mar, la tranquilidad y las excelentes vistas de este hermoso puerto caribeño mientras exploras la rica historia y la exuberante naturaleza de esta zona.
                  </p>
HTML;
break;

}




?>
