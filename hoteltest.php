<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$fechaToday=date('Y-m-dH:i:s');

$r = rand(10000,9999);
$rr = time().$r;

echo <<<HTML
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>We hotels</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <link rel="apple-touch-icon" href="im/favicon.png" >
  <link rel="icon" href="im/favicon.png" >

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">
  
  <link href="fonts/icofont/icofont.min.css" rel="stylesheet">
  <link href="fonts/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="fonts/webfonts/fontawesome.css" rel="stylesheet" media="all">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&display=swap" rel="stylesheet">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- <link href="webstyle.css?v=$r" rel="stylesheet"> -->

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<link href="hotel-datepicker/css/hotel-datepicker.css" rel="stylesheet">
  <script src="hotel-datepicker/js/fecha.min.js"></script>
  <script src="hotel-datepicker/js/hotel-datepicker.min.js"></script>

<style type="text/css">
body {
  font-family: sans-serif;
  width: 100%;
}

ul,
ol {
  list-style: none;
}

#main {
  background: olive;
  margin: auto;
  width: 100%;
  display: block;
}

p {
  color: #ffffff;
}

.slide {
  width: 90%;
  height: 600px;
  margin: 0 auto;
}

.slide ol li figure p {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  width: 140px;
  height: 50px;
  padding: 2% 0 0 0;
  background: #000000;
  text-align: center;
}

.slide ol li {
  width: 100%;
  position: relative;
  height: 50vh;
}

.slide ol li figure {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
  position: relative;
}

.slide ol li figure img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: 50% 20%;
}

.buttons {
  position: relative;
  top: 0%;
  right: 0;
  width: 80%;
  z-index: 1;
}

.arrows {
  width: 80px;
  height: 80px;
  font-size: 4vw;
  color: olive;
}

.list-photos {
  width: 150px;
  height: 100px;
  position: relative;
  left: 100%;
}

.list-photos figure p {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  width: 50%;
  height: 30%;
  padding: 6% 0 0 0;
  background: #000000;
  text-align: center;
  font-size: 1vw;
}
.list-photos figure {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
  position: relative;
}

.list-photos figure img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.botones {
  position: absolute;
  top: 0;
}

.list-photos > figure {
  display: none;
}
</style>


</head>

  <body>



  </body>

<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
      <!-- <script type="text/javascript" src="js/jquery.glide.js"></script> -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js"></script>
      

<link href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.core.min.css" rel="stylesheet" type="text/css">      
<!--
<link href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.theme.min.css" rel="stylesheet" type="text/css">      
-->



 <h1>Slide load clone</h1>

    <div id="main">
      <div class="glide slide">
        <div class="glide__track" data-glide-el="track">
          <ol class="glide__slides wrapper">
            <li class="glide__slide slideB">
              <figure>
                <p>Photo 1</p>
                <img
                  src="https://cdn.pixabay.com/photo/2015/12/01/20/28/road-1072823_960_720.jpg"
                  alt=""
                />
              </figure>
            </li>
            <li class=" glide__slide slideB">
              <figure>
                  <p>Photo 2</p>
                <img
                  src="https://cdn.pixabay.com/photo/2018/04/16/16/16/sunset-3325080__340.jpg"
                  alt=""
                />
              </figure>
            </li>
            <li class=" glide__slide slideB">
              <figure>
                  <p>Photo 3</p>
                <img
                  src="https://cdn.pixabay.com/photo/2016/05/05/02/37/sunset-1373171__340.jpg"
                  alt=""
                />
              </figure>
            </li>
          </ol>
        </div>
        <div class="buttons">
          <div class="list-photos">
            <!-- load photos slide clone -->
          </div>
          <div class="botones">
            <div class="arrows-box">
                <div class="glide__arrows" data-glide-el="controls">
                  <button class="glide__arrow glide__arrow--left arrows" data-glide-dir="<"><
                  </button>
                  <button class="glide__arrow glide__arrow--right arrows" data-glide-dir=">">>
                  </button>
                </div>
              </div>
            </div>
         </div>
      </div>



<script type="text/javascript">
  


let photostSlide = document.querySelectorAll("ol.glide__slides figure");
let photos = document.querySelector(".list-photos");

photostSlide.forEach((figure, index) => {
  photos.appendChild(figure.cloneNode(true));
});

let photosList = document.querySelectorAll(".list-photos figure");

var count = 0;

photosList.forEach((figure, index, item) => {
  figure.classList.add("photo-" + count++);
});

if (count >= 0) {
  console.log("load mayor", photosList, (count = 0));
  //photosList = 0;
  photosList[1].style.display = "block";
} else {
  console.log("load");
}

/* if (index === 0) {
  //console.log("Load Next photo", figure, index);
  //index = figure.nextSibling;
  //figure.style.display = "none";
  console.log(index = figure.nextSibling, index);
  //figure.nextSibling;
} else {
  //console.log("Load no");
  //figure.style.display = "none";
  //console.log(figure, index);
  //console.log('load ???');
  //console.log(figure.nextSibling, index);
} */

var options = {
  type: "slide",
  animationDuration: 1000,
  autoplay: 0,
  focusAt: "0",
  startAt: 0,
  perView: 1,
  peek: {
    before: 0,
    after: 0
  }
};

var glide = new Glide(".glide", options).mount();

</script>

HTML;


?>

  <!-- footer end-->
