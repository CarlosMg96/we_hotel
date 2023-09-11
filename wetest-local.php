<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
//require_once "functions.php";
$thistime = date("M,d,Y h:i:s A");
$r = rand(1000,999);
$rr = time().$r;

echo <<<HTML
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>We test</title>
   
   <meta name="viewport" content="width=device-width">
   <meta name="author" content="Sodio - Comunicación Visual">
   <meta name="apple-mobile-web-app-capable" content="yes" />
   
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i|Roboto+Slab:300,400,700,800|Roboto:400,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <!-- estilo Página -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css" type="text/css">

   <link href="css/sweetalert2.min.css"rel="stylesheet">
    <link href="css/pinnacle.css?me=2"rel="stylesheet">

<script language="javascript" type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

    <style>
      html,body{
         width: 100%;
         font-family:'Raleway', sans;
         color: #266981;
      }

/* --------------------- +++++++++++++++++++++++++++++ ------------------  */

      .msg {color: red;}
      .box {
         width:50%; margin-left:4%;
         float:left; 
         background-color: #E8F5F7;
         border:0px;
         border-radius:1.2em;
      }
      .Datas {
         width:40%; float:left; padding-top: 1em;
      }
      .minibox {
         margin:0em 0.6em;
         padding:0.1em 0.4em;
      }

      .flex1 {
         display: flex; flex-flow: row wrap; justify-content: center;   align-items: center;
      }
      .modal0, .modal00, #modal0 {
         z-index: 200;
         //background-color: rgba(0,0,0,0.5);
         background-color:rgba(90,113,45,0.85);
         position: fixed;  width: 100%;   height: 100%;
         display: flex; flex-flow: row wrap; justify-content: center; align-items: center;
         opacity: 0; visibility: hidden;
         transition:visibility 0.5s linear,opacity 0.5s linear;
      }
      .modal00--show {
        opacity: 1;
        visibility: visible;
      }

    .modal1, #modal1 {
      background-color: #f1f2f3;
      flex-flow: row wrap; 
      justify-content: center;
      align-items: center;
      text-align: center;
      width: 400px;
      height: 400px;
      opacity: 0.96;
    }
    .modal2, #modal2 {
      background-color: #f1f2f3;
      flex-flow: row wrap; justify-content: center;align-items: center;text-align: center;
      width: 90%;min-height: 200px; padding:1.2em;
      opacity: 0.95;
      border-radius:1em;
      font-size:1.4em;
    }
    .holidayparty{
      width:20%; max-width:700px; margin:1em;
    }

.boxes{
   padding:2em;margin:2em;
   background-color:#E8F5F7 ;
   border-radius: 1em;
   font-size: 1.4em;font-weight:600;
   text-align:center;
   cursor:pointer;
}
.iconz {
   height:150px;
   margin-bottom:1em;
}
.footer {
   font-size:2em; min-height:200px;width:100%; color:white; background-color:#276E8E; padding:2em; text-align:center; color:white; font-weight:100;
}
.theAddress {
   font-size:1.4em;
   color:#5A702C;
   margin-bottom:1em;
   line-height:0;
}
.exit {
   position:absolute; top:6.5em; right:0em; 
}
.editButton {
   position:relative; width:180px; padding:0.4em 1em; border:1px solid #266981;font-size:0.8em; color:#266981;border-radius:6px; margin:0.4em auto; cursor:pointer;
}
.editButton:hover {
   background-color: white;
}
.input_1{
         background-color:transparent;
         border-width:0px 0px 2px 0px; border-style: solid; border-color: #409FB0 ; color: #333;
         padding: 0.2em 0.7em;
         font-family: 'Roboto',sans;   font-size:1.4em; text-align:center; 
         background-repeat:no-repeat; background-position:0.6em 0.6em; padding:0.4em; 
         background-size:1.2em; 
         width:40%; 
      }
      .musicTable {
         width:100%;
         margin-bottom:50px;
      }
      .musicTable td{
         text-align:center;
         padding:0.4em 1em;
         border-bottom: 1px solid #fff;
      }
      @media (max-width: 800px){
         .box {width:100%; margin-left:0; }
         .Datas {width:100%;}
         .footer {  font-size:1em; padding:2em 0.4em; font-weight:100;}
         .modal2, #modal2 {   font-size:1.2em; padding:2em 0.4em 1em 0.4em;  }
         .theAddress {font-size:0.8em; line-height:0 !important;}
         .exit{ top:2.5em;  }
         .iconz { height:100px;}
         .boxes{
            padding:1em;margin:1em;
            border-radius: 0.6em;
            font-size: 1.2em;
         }
         .input_1{ width:80%;}
         
      }
      @media (max-width: 1324px){
         .theAddress {font-size:1em; }
      }
      @media (max-width: 991.98px){
         .theAddress {font-size:0.75em;}
         .holidayparty{width:40%; }    
      }
      @media (max-width: 600px){
         .holidayparty{
            width:80%; 
         }    
         .box {
            width:100%; margin-left:0; 
         }
      }
      
      .lightbox-carousel.carousel {
        padding: 0rem;
        background: #ffffff7a;
      }
      .ratio {
         background-color:white !important;
      }
      .carousel-control-prev-icon,.carousel-control-next-icon {
         background-color:#B1C576; 
         border-radius:1em;
      }

      .prevent-select {
        -webkit-user-select: none; /* Safari */
        -ms-user-select: none; /* IE 10 and IE 11 */
        user-select: none; /* Standard syntax */
      }
    </style>
</head>
<body>
<script type="text/javascript">
    fetch('https://wubook.net/wbkd/fount/json', {
    method: 'POST',
    headers: {
        'sec-fetch-mode': 'cors',
        'sec-fetch-site': 'cross-site',
        'content-type': 'application/x-www-form-urlencoded'
    },
    body: '{"lcodes":["1515700178"], "dfrom":"23/09/2023", "dto":"25/09/2023"}'
}).then(response => response.json())  // convertir a json
    .then(json => console.log(json))    //imprimir los datos en la consola
    .catch(err => console.log('Failed!', err)); // Capturar errores
</script>
HTML;





?>


