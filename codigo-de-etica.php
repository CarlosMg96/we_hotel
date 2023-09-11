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

      
      <!-- background-image: url('im/diagonals.png');background-size: cover;  -->
      <div style="width:100%;  position:relative; height:4.3em">
      </div>

  <div style="width:100%; height:300px; background-image:url('im/headers-3.jpg'); background-size:cover; text-align: center;">
    <div data-aos="fade-in" data-aos-duration="3700"  style="width:70%;margin:7em auto; text-align:left">
       <span class=title1>Código de ética</span>
       <br>
       <span class=title2>sit amet consectur</span>
    </div>
  </div>

  <div style="width:80%; margin:3em auto">

    <img src="im/codigo-1.jpg" style="width:40%; float:right; margin:0em 0em 1em 4em;">
    <p>
      <b>Nuestro código de ética y conducta</b> es la herramienta que consolida nuestra filosofía y nos induce hacia los criterios de comportamiento con los que nos dirigimos a nuestros grupos de interés, su cumplimiento es obligatorio para nuestros consejeros, gerentes, colaboradores y proveedores, siendo responsabilidad de todos observar y hacer observar todas las conductas descritas en el mismo.
      </p>
      <p>
Este código se fundamenta en el valor y respeto por los derechos humanos, pues creemos que toda persona es única e irrepetible y tiene un valor en sí misma; no creemos en las fronteras ni en las divisiones más respetamos religiones, creencias y costumbres, respetamos la dignidad de todos los individuos, sus derechos, sus obligaciones y ponemos los medios que están en nuestro alcance para que se logre su propia realización. Reconocemos la igualdad de todas las personas, creemos en la equidad de género así como valoramos el rol de la mujer y del hombre en la sociedad ofreciéndoles iguales oportunidades, para que con sus talentos y esfuerzo desarrollen y fortalezcan familias.
    </p>
  </div>

  <div style="width:80%; margin:0em auto">
    <p>
En <b>We Hotels</b> rechazamos todo acto de discriminación que consista en realizar cualquier distinción, exclusión, restricción o preferencia que por motivos de raza, nacionalidad, género, edad, discapacidad, condición social o de salud, religión, opinión, preferencia sexual, estado civil, o cualquier otra, con que se atente contra la dignidad humana o tenga por objeto efectos de anular o menoscabar los derechos y libertades de las personas entre otros, logrando que todos nuestros colaboradores manifiesten un comportamiento ético y moral en cuales sean sus actividades.
    </p>
    <p>
En <b>We Hotels</b> además promovemos la bondad, pues creemos en el comportamiento virtuoso de las personas y su inclinación a hacer el bien, manteniéndolo en la mente y en la práctica de nuestros colaboradores todo el tiempo, reflejado en las conductas manifestadas de acuerdo a las determinadas situaciones que ocurren en nuestros hoteles y con nuestros huéspedes, mostrando siempre respeto a la persona y a la situación, conduciéndonos con prudencia y absoluta discreción, apostando siempre al diálogo y a la tolerancia aún en situaciones críticas o adversas.
  </p>
  </div>


  <div style="width:80%; margin:3em auto 0em auto">
    <img src="im/codigo-2.jpg" style="width:40%; float:left; margin:0em 4em 1em 0em;">
    <p>
      Así mismo, en <b>We Hotels</b> honramos al conocimiento como eje primordial de nuestra organización, ejerciendo la constancia en la mejora continua y la tenacidad en nuestro esfuerzo diario, dejando de lado vicios como la pereza y la apatía, siempre orientados a la laboriosidad, reconociendo nuestros errores y trabajando fehacientemente para enmendarlos y corregir los caminos que nos llevaron a cometerlos.
      </p>
      <p>
Todo lo que somos y aquí se describe, lo concebimos desde la humildad, a la que consideramos nuestra guía tanto en nuestros aciertos como en nuestros errores, y desde donde partimos para lograr marcar la diferencia llevando la honestidad como estandarte a través de nuestro equipo de profesionales, encargados de reconocer nuestras debilidades, de subsanar y remediar nuestros errores, así como de realzar nuestros aciertos y nuestras fortalezas, reconociendo también nuestras virtudes, sin reprocharnos o vanagloriamos.
    </p>
  </div>


  <div style="width:80%; margin:0em auto 4em auto">
    <p>
      El carácter que tenemos en <b>We Hotels</b> no es menos importante, dado que es fundamental para vivir con la integridad personal y profesional que pregonamos, mismo que además nos conduce a la lealtad hacia nosotros mismos, proyectando una genuina fidelidad a nuestros principios como personas y a la organización que nos permite desempeñar nuestros talentos día a día con la mayor sinceridad de nuestros pensamientos, palabras y acciones.
      </p>
      <p>
En <b>We Hotels</b> tenemos muy claro que siendo sinceros y empáticos con los demás desarrollaremos la paciencia y tolerancia de manera natural, y que además, cultivando la paciencia, sabremos escuchar mejor a nuestros huéspedes, proveedores, directivos, gerentes y colaboradores, identificando ante todo la información esencial que cada uno de ellos nos emite, permitiéndonos así el poder brindarles las soluciones más justas y creativas posibles.
    </p>
    <p>
Finalmente, destacamos la nobleza como otro de los pilares en nuestra organización, pues creemos que forma parte de un corazón justo, bueno y generoso, el cual debemos cultivar día con día y procurar alimentarlo y acrecentarlo, pues esto se traducirá en el amor que como individuos transmitamos hacia nuestro trabajo y en la fraternidad que mantengamos al relacionarnos con nuestros huéspedes, proveedores, directivos, gerentes y colaboradores, promoviendo incluso la práctica filantrópica a nivel personal e institucional.
    </p>
    <p>
Este código de ética está basado en la responsabilidad y a través de este importante instrumento pretendemos asegurar que todos recibamos un trato digno y respetuoso, al tiempo de velar por el cumplimiento del mismo mediante su difusión como parte esencial de la capacitación que reciben nuestros colaboradores así como con la implementación de medios de denuncia en caso de que alguien observe lo contrario.
    </p>
    <p>
<b>En We Hotels aceptamos y reconocemos este código como parte de nuestro nombre y nuestra empresa.</b>
    </p>
  </div>


HTML;


require_once "footer.php";

?>

  <!-- footer end-->
