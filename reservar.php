<?php


echo <<<HTML

<style type="text/css">

  .reservAll0{ overflow: visible; position:absolute; width:100%; top:$top; height:200px;  z-index:7; }

  .reservAll{ width:95%; margin:1em auto;  overflow: visible; display:flex; flex-flow: row; flex-wrap: wrap;align-items:center; justify-content: space-between;}

  .resBox1 {      
    min-width:10%;
    height:120px;
    font-size:0.8em;
    text-align:left;
    overflow: visible;
  }


  .select-dropdown,
.select-dropdown * {
  margin: 0;
  padding: 0;
  position: relative;
  box-sizing: border-box;
  color:#444;
}
.select-dropdown, .input-id  {
  position: relative;
  background-color: transparent;
  border-radius: 0px;
}
.select-dropdown select, .input-id {
  font-size: 1rem;
  font-weight: normal;
  width: 100%;
  padding: 8px 24px 8px 10px;
  border: none;
  background-color: transparent;
    -webkit-appearance: none;
    -moz-appearance: none;
  appearance: none;
}
.select-dropdown select:active, .select-dropdown select:focus {
  outline: none;
  box-shadow: none;
}
.select-dropdown:after {
  content: "";
  position: absolute;
  top: 50%;
  right: 8px;
  width: 0;
  height: 0;
  margin-top: -2px;
  border-top: 5px solid #aaa;
  border-right: 5px solid transparent;
  border-left: 5px solid transparent;
}
.select-dropdown, .input-id  {
  border-bottom:1px solid black;
}
.input-id {
  width:80%;
  color:#444;
}

.datepicker__month-day--first-day-selected, .datepicker__month-day--last-day-selected {
      background-color: #3858e9;
      background-color: #DEB666;
      color: #fff;
  }
  .datepicker__month-day--selected {
  background-color: rgba(222, 182, 102, 0.6);
  color: #fff;
  }
  .datepicker__month-day--hovering {
      background-color: rgba(222, 182, 102, 0.2);
      color: #fff;
    }
  .datepicker__submit-button, .datepicker__clear-button{
      background-color: #DEB666;
      color: #fff;
  }
  .datepicker__submit-button:hover, .datepicker__clear-button:hover {
      background-color: #DEB666;
      color: #ffffff;
    }
    .datepicker__month-day--today {
      background-color: #dadada;
      border-radius:8px;
    }
    .datepicker__month-name{
      color: #DEB666;
      font-size:1.4em;
      font-weight:200;
    }
    .datepicker__month-day--disabled:after {
        content: '\\00d7';
        left: 50%; top: 50%;
        position: absolute;
        color: darkgoldenrod;
        font-size: 26px;
        transform: translate(-50%, -50%);
  }
  .datepicker__close-button, .datepicker__clear-button, .datepicker__submit-button{
    background-color: #DEB666;
  }

  .mobileSpacer { display:none; }

  @media only screen and (max-width: 1200px) {
    .reservAll{ width:100%;}
    .resBox1 {width:80%;margin:0px auto;}
    .mobileSpacer { display:block; width:100%;height:30em; background-color:transparent;z-index:0; }
  }
  
</style>


 <div class="reservAll0">
            <div class=a80 style=" margin:0px auto; min-height:160px; background-color: white; box-shadow: 1px -1px 17px 0px rgba(0,0,0,0.2);  overflow: visible; ">

            <div style="width:100%; height:2em"></div>

              <div class="reservAll">
                <input id="actualDate" placeholder="altDate" style="display:none">
                <div class="resBox1 a20">
                  Destino
                  <div class="select-dropdown">
                    <select id="destino">
                      <option value=""></option>
                      <option >ACAPULCO</option>
                      <option >AEROPUERTO</option>
                      <option >PUERTO MORELOS</option>
                    </select>
                  </div>
                </div>

                <div class="resBox1 a40">
                  Llegada/Salida
                  <br>
                  <input id="input-id" class="input-id" type="text" oninput="copiarFecha()" />
                </div>

                
                <div class="resBox1 a10">
                  Huéspedes
                  <div class="select-dropdown ">
                    <select id="huespedes">
                      <option value=""></option>
                      <option >2</option>
                      <option >3</option>
                      <option >4</option>
                      <option >5</option>
                      <option >6</option>
                    </select>
                  </div>
                </div>

                <div class="resBox1">
                  <input type="button" value="Reservar ahora" class="boton1" onmouseup="reservarAhora()">
                </div>

              </div>

            </div>
            <hr>
            <script src="https://wubook.net/js/wblib.jgz"></script>

  </div>

  <div class="mobileSpacer"></div>

<script>

var input = document.getElementById('input-id');
var datepicker = new HotelDatepicker(input, {
    //format: 'dddd D MMM YYYY',
    format: 'YYYY/MM/DD',
    altField  : '#actualDate',
    altFormat : 'yy-mm-dd',
    startOfWeek: 'monday',
    onSelectRange: function() {
      copiarFecha();
    },
    i18n: {
        selected: 'Seleccionados:',
        night: 'Noche',
        nights: 'Noches',
        button: 'Cerrar',
        clearButton: 'Cancelar',
        submitButton: 'Enviar',
        'checkin-disabled': 'Check-in deshabilitado',
    'checkout-disabled': 'Check-out deshabilitado',
        'day-names-short': ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
        'day-names': ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
        //'day-names': ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        'month-names-short': ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        'month-names': ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        'error-more': 'L\'intervallo di date non deve avere più di 1 notte',
        'error-more-plural': 'L\'intervallo di date non deve avere più di %d notti',
        'error-less': 'L\'intervallo di date non deve avere meno di 1 notte',
        'error-less-plural': 'L\'intervallo di date non deve avere meno di %d notti',
        'info-more': 'Favor de seleccionar un rango',
        'info-more-plural': 'Favor de seleccionar un rango mayor a %d noches',
        'info-range': 'Favor de seleccionar un rango de %d y %d noches',
        'info-range-equal': 'Per favore seleziona un intervallo di %d notti',
        'info-default': 'Favor de seleccioanr un rango',
        'aria-application': 'Calendario',
        'aria-selected-checkin': 'Data selezionata come check-in, %s',
        'aria-selected-checkout': 'Data selezionata come check-out, %s',
        'aria-selected': 'Data selezionata, %s',
        'aria-disabled': 'Non disponibile, %s',
        'aria-choose-checkin': 'Scegli %s come data del check-in',
        'aria-choose-checkout': 'Scegli %s come data del check-out',
        'aria-prev-month': 'Muovi indietro per visualizzare il mese precedente',
        'aria-next-month': 'Muovi in avanti per visualizzare il mese successivo',
        'aria-close-button': 'Cerrar datepicker',
        'aria-clear-button': 'Cancelar fechas seleccionadas',
        'aria-submit-button': 'Enviar'
    }
});

function copiarFecha(){
  /*
  var inputid = $('#input-id').val();
  $('#actualDate').val(inputid);
  var  dosfechas = inputid.split(' - ');
  var date1 = inputid[0];
  var date2 = inputid[1];
  $('#input-id').val('Del '+date1+' al '+date2[0]);
  */
}

function reservarAhora(){
  var destino = $('#destino').val();
  var inputid = $('#input-id').val();
  var huespedes = $('#huespedes').val();


 var rLink = "https://wubook.net/wbkd/wbk/?lcode=1515700178&lang=es";

if (destino =="AEROPUERTO"){
  rLink = "https://wubook.net/wbkd/wbk/?lcode=1496258226&lang=es";  
}

if (destino=="PUERTO MORELOS"){
  rLink = "https://hotels.cloudbeds.com/es/reservation/sagBke?currency=USD";  
}

  if (!destino){
    alert('Favor de seleccionar destino');
  } else {
    document.location = rLink;
  }
  
}
</script>

HTML;


/*


<div style="width:100%; position:absolute; top:400px; border:3px solid cyan; z-index:20">
    <div id="_wbord_">
      <a href="http://wubook.net/services/booking-engine/" style="display: block; margin-top: 5px; text-decoration:none;border:none" target="_blank">
      <img src="https://wubook.net/imgs/default/booking_by_wu.gif" alt="Online Booking System" title="Hotel and tourism technologies" style="border:none;text-decoration:none">
      </a>
    </div>
</div>

<script>
  var WuBook= new _WuBook(1626217971);
  var wbparams= {
    bordercolor: 'transparent',
    lang: '',
    buttoncolor: '#DEB666',
    failback_lang: 'en',
    wbgoogle: 1,
    bgcolor: 'transparent',
    iconcolor: '#DEB666',
    textcolor: '#111',
    default_nights: 1,
  };
  WuBook.design_rwidget("_wbord_", wbparams);
</script>

*/
?>
