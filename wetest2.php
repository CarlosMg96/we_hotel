<?php

echo <<<HTML

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>


<script src="https://wubook.net/js/wblib.jgz"></script>

<div id="_wbord_">
  <a href="https://wubook.net/page/WooDoo-Booking-Engine-35.html" style="display: block; margin-top: 5px; text-decoration:none;border:none" target="_blank">
    <img src="https://wubook.net/imgs/default/booking_by_wu.gif" alt="Booking Engine Wubook" title="Soluciones de gestión hotelera" style="border:none;text-decoration:none" />
  </a>
</div>
<!-- 
     Initialize the WuBook Object.
     Collect params settings.
     Call WuBook.design_rwidget().

     Notice WuBook Object provides a
     lot of interesting features.
-->
<script>
  var WuBook= new _WuBook(1515700178);
  var wbparams= {
    bgcolor: '#ffffff',
    textcolor: '#2c2c2c',
    buttoncolor: '#bda110',
    iconcolor: '#888888',
    bordercolor: '#bdb010',
    lang: '',
    failback_lang: 'en',
    wbgoogle: 1,
    default_nights: 1,
    dcodeval: '',
    leisure: 1
  };
  WuBook.design_rwidget("_wbord_", wbparams);
</script>
<!-- 
    that's all :)
    Thank you for using WuBook!
-->


<h1>WuBook Test</h1>
<div id=testArea></div>

<script src="https://wubook.net/js/wblib.jgz"></script>
<script>
   console.log("Hello");
   WuBook= new _WuBook(1515700178);
   // Then, if you want to open the booking engine using Arrival Date= 21/12 and 3 nights:

   //WuBook.open({'dfrom': 21/12/2024, 'dto':24/12/2024 });

   $('#testArea').html('Hey');

   var params= {dfrom: '23/09/2024', dto: '25/09/2024'};

   

   //WuBook.fount({'dfrom': '21/12/2023', 'dto': '23/12/2023'}, function(data) {
   WuBook.fount(params, function(data) {
      console.log(data.results);
      console.log(data.results['1515700178'][2]);
      console.log(data.results['1515700178'][3]);
      const Res2 = data.results;
      const Res1 = ["apple", "orange", "cherry"];
      Res2.forEach(function(r){
         $('#testArea').append('<br>'+r);
      });
      $('#testArea').append('<br>'+data.results['1515700178'][2]);
      $('#testArea').append('<br>'+data.results['1515700178'][3]);
   });


params= {
 bordercolor: '#108dbd',
 lang: '',
 buttoncolor: '#108dbd',
 failback_lang: 'en',
 wbgoogle: 1,
 bgcolor: '#ffffff',
 iconcolor: '#888888',
 textcolor: '#2c2c2c',
 default_nights: 3
};


//WuBook.design_rwidget('__wubook__', params, function() {alert('widget is deployed');});
   
</script>
HTML;



?>


