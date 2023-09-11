<?php

echo <<<HTML

  <!--  -----------------------------------------------------------------------------  -->

  <!--  -----------------------------  footer start  ----------------------------------  -->


  <div id="Footer" style="position:relative; width:100%; background-color:#000;">
    &copy; 2023
  </div>



  <!--  -----------------------------  footer end  ----------------------------------  -->

  <!--  -----------------------------------------------------------------------------  -->


  <!-- modal00 start -->
  <div id="modal00"  onmouseup="$('#modal00').fadeOut();">
  
    <div onmouseup="event.stopPropagation();" style="width:96%; right:0; top:0; position:fixed; background-color: white ; padding:0.7em; z-index:11;">

        <a style="float:right; cursor:pointer; font-size:2em" onmouseup="$('#modal00').fadeOut();"><i class="icofont-close"></i></a>
        <br>

        HEY!

      </div>  
  </div>
  
  <!-- modal00 end -->

  <!--<div style="position:relative;width:100%; height:calc(200vh - 60px);"></div>-->

  <!-- footer start-->


<form id="gotoForm" method="post" action="./" style="display:none;">
  <input type="text" name="goTo" id="goTo" value="">
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>


<!--

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  

    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/counterup2/2.0.2/index.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" ></script>
    -->

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });

            $('.c4').mouseover(function(){
              var nm = $(this).attr('name');
              $(this).attr('src','im/'+nm+'-B.jpg');
            });
            $('.c4').mouseout(function(){
              var nm = $(this).attr('name');
              $(this).attr('src','im/'+nm+'-A.jpg');
            });
            check4mobile();
        });
    
  
  $(window).on('resize', function(){
    
    check4mobile();
  });

  function check4mobile(){
    let w = $(window).width();
    if (w<1000) {
HTML;

      if ($go=="main"){
        //echo "window.location.assign('m_index.php')";
      }

echo <<<HTML

    }
  }
</script>


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
    $('#goTo').val(wh);
    $('#gotoForm').delay("slow").submit();
    
  }



</script>
</body>
</html>
HTML;
?>

  <!-- footer end-->
