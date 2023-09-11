<?php

echo <<<HTML

  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script type="text/javascript">

  $(function() {


    AOS.init({
      // Global settings:
      disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
      startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
      initClassName: 'aos-init', // class applied after initialization
      animatedClassName: 'aos-animate', // class applied on animation
      useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
      disableMutationObserver: false, // disables automatic mutations' detections (advanced)
      debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
      throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
      

      // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
      offset: 120, // offset (in px) from the original trigger point
      delay: 400, // values from 0 to 3000, with step 50ms
      duration: 1700, // values from 0 to 3000, with step 50ms
      easing: 'ease', // default easing for AOS animations
      once: false, // whether animation should happen only once - while scrolling down
      mirror: false, // whether elements should animate out while scrolling past them
      anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });

  });

  function scrollIt(who1){
        updown="down";
        console.log('scrollit ('+who1+')');
        if (updown=='up'){
            $('html, body').animate({scrollTop: $('#'+who1).offset().top -400 }, 1000);     
            console.log('updown='+updown);
        } else {
            $('html, body').animate({scrollTop: $('#'+who1).offset().top -210 }, 1000); 
        }
  }


  function goto(wh){
    //window.location.assign(wh+".html");
    $('#modal001').fadeIn();
    $('#goTo').val(wh);
    
    setTimeout( function () { 
            $('#gotoForm').submit();
    }, 400);       
    
  }

  function Politicas(){
    
    $.ajax({
      url : 'terminos.php',
      type : 'POST',
      dataType:'html',
      success : function(data) {   
          $('#emptyContent').html(data);
          setTimeout( function () { 
            $('#emptyModal0').fadeIn();
          }, 300);       

      }, error : function(request,error){
          alert("Request: "+JSON.stringify(request));
      }
    }); // ajax 

  }

  function Aviso(){
    
    $.ajax({
      url : 'aviso.php',
      type : 'POST',
      dataType:'html',
      success : function(data) {   
          $('#emptyContent').html(data);
          setTimeout( function () { 
            $('#emptyModal0').fadeIn();
          }, 300);       

      }, error : function(request,error){
          alert("Request: "+JSON.stringify(request));
      }
    }); // ajax 

  }

  function changeSlider(ix){
    $('#sliderContent').fadeOut();

    $.ajax({
      url : 'slider1.php',
      type : 'POST',
      dataType:'html',
      data: {'index':ix},
      success : function(data) {   
          $('#sliderContent').html(data);
          setTimeout( function () { 
            $('#sliderContent').fadeIn();
            const places = ["acapulco", "aeropuerto", "puertomorelos"];
            $('#ver').attr("href", places[ix]); 
          }, 300);       
      }, error : function(request,error){
          alert("Request: "+JSON.stringify(request));
      }
    }); // ajax 

  }

  function reveal(who) {
                var st = $('#'+who).css('display');
                if (st == 'none') {
                    $('#'+who).fadeIn();
                } else {
                    $('#'+who).fadeOut();
                }
            }        



initThumb();

function initThumb(){
  $('.thumb').mouseup(function(){
      var pid = $(this).parent().parent().attr('num');
      subirFoto(pid,'1');
  });

  $('.pp').mouseup(function(){
    var pid= $(this).attr('pid');
    var n= $(this).attr('n');
    subirFoto(pid,n);
  });

}


function resetDzone(){
    $('#subirbox').fadeOut();
    $('.dropzone')[0].dropzone.files.forEach(function(file) {
        file.previewTemplate.remove();
    });
    $('.dropzone').removeClass('dz-started');
    $('#bigPic').css('background-image',"url('')");
}

</script>

HTML;

if (!empty($tb)){

echo <<<HTML

<script type="text/javascript">

function subirFoto(pid,n) {
  //$('#cualFoto').val(foto);
  resetDzone();
  $('#pid').val(pid);
  $('#n').val(n);
  console.log('subirFoto '+pid+' : '+n + ", tb: $tb, picdir: $picdir");
  setTimeout( function () {   $('#subirbox').fadeIn();    }, 400);
  
  $('.dz-default').css("height", "300px");
  $('.dz-default').css("padding-top", "120px");
  $.ajax({
      url : 'admin-get-foto.php',
      type : 'POST',
      data: {'pid': pid, 'n':n, 'tb':'$tb', 'picdir':'$picdir'},
      dataType:'html',
      success : function(data) {
          console.log('data='); console.log(data);
          if (data && data != 'No Data') {
            $('#bigPic').css('background-image',"url('$picdir/"+data+"')");  
            $('#delButton').fadeIn(); 
            
          } else {
            $('#delButton').css('display','none');
          }
          
         // $('#bigPic').html(data);
      }, error : function(request,error){
          alert("Request: "+JSON.stringify(request));
      }
  }); // ajax 
}

function changeFoto(pid, n, foto) {
  console.log('chageFoto '+pid+' ('+n+') : '+foto);

  if (n<2) {
    $('.p'+pid).css("background-image","url('$picdir/"+foto+"')");  
  }else{
    $('.p_'+n+'_'+pid).css("background-image","url('$picdir/"+foto+"')");  
  }
  
  $.ajax({
      url : 'admin-prod-foto.php',
      type : 'POST',
      data: {'pid': pid, 'foto': foto, 'n':n, 'tb':'$tb', 'picdir':'$picdir'},
      dataType:'html',
      success : function(data) {
          console.log(data)
          $('#thispid').val(data);
          $('#subirbox').fadeOut();
          loadList();
      }, error : function(request,error){
          alert("Request: "+JSON.stringify(request));
      }
    }); // ajax 


}


$(function() {
  Dropzone.options.dzone = { 
    acceptedFiles: 'image/*',
    resizeWidth:  1100,
    //resizeHeight: 100,
    resizeMethod: 'crop',
    dictDefaultMessage: "Click aquí o arrastrar imagen"
  }
});

$('#delButton').mouseup(function(){
  var pid = $('#pid').val();
  var n = $('#n').val();
  console.log('delFoto '+pid+' : '+n);
  delFoto(pid,n)
});

function delFoto(pid,n){
// fname es la etiqueta del documento
// ufnm es el nombre del archivo
//(ac_id:'+ac_id+', form:'+ thisform +', cons:'+consec+', ftag:'+fname+', filename:'+ufnm+' ) 

    // console.log('Upfile bname = '+ $("#upfile_"+upcnt).attr('name') );

Swal.fire({
  title: '¿Deseas eliminar esta foto? ',
  text: "¡Esta acción es irreversible!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Sí, eliminar',
  cancelButtonText: 'Cancelar'
}).then((result) => {
    //console.log('result..');
  if (result.value) {
    console.log("Confirmed!");

    $.ajax({
        url: 'admin-del-foto.php',
        method: "POST",
        dataType : "html",
        data: {'pid':pid, 'n':n, 'tb':"$tb", 'picdir':"$picdir"},
        success: function (ht) {  //true
                //$.each(result, function(i, field){console.log(i+"="+field);});   
                // console.log("upfile_"+ upcnt +" :fadeOut()");
                 console.log(ht);
                $('#bigPic').css('background-image','none');  
                if (n<2) {
                  $('.p'+pid).css("background-image",'none');  
                }else{
                  $('.p_'+n+'_'+pid).css('background-image','none');  
                }
                $('#subirbox').fadeOut();
//            console.log(result.message);
        }, error: function (d) {
             console.log ('error: ');
             console.log(d);
        }
    }); // ---------  ajax  
    
    

  } else {
    console.log('NOT confirmed');
  }
});


} // delFoto end
  


function loadList(){
  
  var srch ='';
  srch =$('#buscar').val();

  
  var ascdesc = $('#ascdesc').val();
  var order = $('#order').val();

  $.ajax({
        url: 'admin-$tb-lista.php',
        method: "POST",
        dataType : "html",
        data: {'tb':"$tb", 'picdir':"$picdir", 'srch':srch, 'order':order, 'ascdesc':ascdesc},
        success: function (result) {  //true
                
                $('#Lista').html(result);
                setTimeout( function () { 
                  initThumb();
                }, 400);       
                
                 
        }, error: function (d) {
             console.log ('error: ');
             console.log(d);
        }
    }); // ---------  ajax  

  if (ascdesc=='ASC'){
  $('#ascdesc').val('DESC');
  }else {
    $('#ascdesc').val('ASC');
  }

}

function delItem(pid){
// fname es la etiqueta del documento
// ufnm es el nombre del archivo
//(ac_id:'+ac_id+', form:'+ thisform +', cons:'+consec+', ftag:'+fname+', filename:'+ufnm+' ) 

    // console.log('Upfile bname = '+ $("#upfile_"+upcnt).attr('name') );

Swal.fire({
  title: '¿Deseas eliminar este registro? ',
  text: "¡Esta acción es irreversible!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Sí, eliminar',
  cancelButtonText: 'Cancelar'
}).then((result) => {
    //console.log('result..');
  if (result.value) {
    console.log("Confirmed!");

    $.ajax({
        url: 'admin-del-item.php',
        method: "POST",
        dataType : "html",
        data: {'pid':pid, 'tb':"$tb", 'picdir':"$picdir"},
        success: function (ht) {  //true
                //$.each(result, function(i, field){console.log(i+"="+field);});   
                // console.log("upfile_"+ upcnt +" :fadeOut()");
                 console.log(ht);
                loadList();
//            console.log(result.message);
        }, error: function (d) {
             console.log ('error: ');
             console.log(d);
        }
    }); // ---------  ajax  
    
    

  } else {
    console.log('NOT confirmed');
  }
});


} // delFile end

function doEdit(what,pid){
  console.log('Edit '+what+" ("+pid+")");
  $('#disp_' + what + "_" + pid).css('display','none');
  $('#edit_' + what + "_" + pid).fadeIn();
}


function upd(table1,field1,inputid,pid){

  $('#guardar_'+inputid+'_'+pid).css('display', 'none');    
  $('#spinner_'+inputid+'_'+pid).fadeIn();
  var value1 = $('#'+inputid+'_'+pid).val();

  console.log( 'upd '+table1+', '+field1+', '+inputid+', '+pid+' = ' +value1);

  $.ajax({
        url: 'admin-upd-field.php',
        method: "POST",
        dataType : "html",
        data: {'pid':pid, 'tb':table1, 'field':field1, 'value':value1},
        success: function (ht) {  //true

                $('#spinner_'+inputid+'_'+pid).css('display', 'none');
                $('#check_'+inputid+'_'+pid).fadeIn(); 

                $('#disp_'+inputid+'_'+pid).html(value1); 


              setTimeout( function () {   
                $('#check_'+inputid+'_'+pid).css('display', 'none');
                $('#guardar_'+inputid+'_'+pid).fadeIn(); 

                $('#edit_'+inputid+'_'+pid).fadeOut();
                $('#disp_'+inputid+'_'+pid).fadeIn(); 
              }, 500); 

        }, error: function (d) {
             console.log ('error: ');
             console.log(d);
        }
    }); // ---------  ajax 

}


$('#buscar').on('keypress',function(e) {
    if(e.which == 13) {
      loadList();   
    }
});

function view(pid){
  console.log ('view ($tb) '+pid);
  $.ajax({
        url: 'admin-view.php',
        method: "POST",
        dataType : "json",
        data: {'pid':pid, 'tb':'$tb'},
        success: function (result) {  //true
          console.log('view result ='); 
          console.log(result);
          if (result.stat == 2){
            $('#row_'+pid).css('opacity',0.5);
          } else {
            $('#row_'+pid).css('opacity',1);
          }

        }, error: function (d) {
             console.log ('error: ');
             console.log(d);
        }
    }); // ---------  ajax 
}
</script>

HTML;

} // if (!empty($tb))


?>

  <!-- footer end-->
