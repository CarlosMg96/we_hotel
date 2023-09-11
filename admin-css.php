<?php


echo <<<HTML

<style type="text/css">

* {
      font-size:1em;
    }

    body {
      font-family: 'Montserrat', sans-serif;
      font-weight:100;
      color:#002855;
      border:0;
      padding:0;
      margin:0;
      overflow-x: hidden;
    }
    html, body{
      width:100vw;
      height:100%;
    }
    body{
      overflow-x: hidden;
    }
    * {
      font-size:1em;
    }
    .swal2-container{  position:fixed; z-index:5006;} 
    td{
      padding:0;
    }
    :root {
      --animate-duration: 1800ms;
      --animate-delay: 1.5s;
    }
    .sen-b{
      font-weight: 700;
    }
    .golden { color:#DEB666; }
    .wh {color:white;}
    -bk {color:black;}
    .bp, .bpw { position:relative; height:9vh; cursor:pointer; z-index:5;}
    p { line-height:1.4em;}
    b { font-weight:700;}
    a {text-decoration: none; color:inherit; cursor:pointer;}
    div { position:relative; overflow:hidden; }
    .logo {height:3em; margin:1em 1em 1em 5em; vertical-align:middle;}
    .topMenu{
      width:100vw;  background-color:#000; position:fixed; z-index:15; color:white;
    }

    .modal0 {
       filter: blur(2px); -webkit-filter: blur(2px); -moz-filter: blur(2px); -o-filter: blur(2px); -ms-filter: blur(2px);
    }
    #modal00 {
      display:none;
      -webkit-backdrop-filter: blur(5px);
      backdrop-filter: blur(5px);
    }
    #modal00{
      position:fixed;  width:100vw; height:100vh;background-color:rgba(240,240,240,0.5);z-index:19;
    }
    
  .boton1{
    background-color: #DEB666;
    color:white;
    padding:1em 2em;
    border-radius:2em;
    margin-top:0.6em;
    cursor:pointer;
    border:1px solid transparent;
  }
  
  .boton2{
    background-color:white;
    color:#DEB666 ;
    border: 1px solid #DEB666;
    padding:1em 2em;
    border-radius:2em;
    margin-top:0.6em;
    cursor:pointer;
  }
  
  .boton1:hover,.boton2:hover {
    background-color:silver;
    color:white ;
    border: 1px solid transparent;
  }
  .thin {
    padding:0.3em 1em;
  }

  .botonsm {
    font-size:0.9em;
    padding:0.5em 1.2em;
    margin-top:0.3em;
  }

.flex1{
  display: flex; flex-flow: row wrap; justify-content:space-between;
}
.title1{
  color: #DEB666;
  font-size:2em;
}
.title2{
  font-size:1.4em;
  color:silver;
}

p{
  margin-bottom:1.8em;
  margin-top:1.6em;
}

.icontable{
  vertical-align:top;
}
.icontable td {
  padding:0.5em 0.7em 0.5em 0em;
  vertical-align:top; 
}
.icontable  td:nth-child(2){
  padding-top:1em;
}
#Footer .icontable  td:nth-child(2){
  padding-top:0.6em;
}
.ic, .ic2{
  color: #DEB666;
  text-align: center;
  font-size:1.6em;
  width:1.4em;
  vertical-align:top;
}
.ic2{
  color:black;
}
#Footer .ic {
  color:silver;
  font-size:1.2em;
}
.fa-solid{
  margin-top:-5px;
}

img{
  align-self: center;
}

  input[type=text], textarea{
    font-size:1.2em; padding:0.3em 0.6em; border:1px solid #cbcbcb;
    color:#444; margin:4px 0px 6px 0px;
    border-radius:0.3em;
  }
  input[type=text]:focus, textarea:focus{
    border:1px solid #DEB666;
    
  }
  *:focus {
    outline: none;
  }
  .a18 {width:18%; }
  .a28 {width:28%; }
  .a38 {width:38%; }
  .a48 {width:48%; }
  .a58 {width:58%; }
  .a68 {width:68%; }
  .a78 {width:78%; }
  .a88 {width:88%; }
  @media only screen and (max-width: 600px) {
    .a18, .a28, .a38,.a48, .a58, .a68,.a78, .a88  {width:98%;}
  }


 .tri {
    width:350px;
    max-width: 80%;
    z-index: -1;
    position: absolute; right: 0px;
    /*clip-path: polygon(5% 5%, 100% 0%, 100% 75%, 75% 75%, 75% 100%, 50% 75%, 0% 75%);*/
    /*clip-path: polygon(100% 0%, 100% 0%, 100% 75%, 100% 100%, 0% 0%, 0% 0%, 0% 0%);*/
    clip-path: polygon(100% 0%,0% 0%,100% 100%);

  }
  .tPedidos {
    border-collapse: collapse;
    font-size:0.85em;
    margin: 40px auto 0px auto;
    width: 100%;
  }
  .tPedidos td {
    padding:0.6em 1em;
    border:0px solid #111;
    border-bottom: 1px solid #ccc;
    text-align: center;
  }
  .tPedidos th {
    padding:0.3em 0.8em;
    border:0px;
    border-bottom: 1px solid #ddd;
    color:silver;
  }
  .tPedidos tr {
    background-color: #fafafa;
  }
  .tPedidos tr:nth-child(odd) {
    background-color: #ffffff;
  }
  
  
  .tPedidos tr:hover {
    background-color: #ffffee;
    cursor: pointer;
  }
  #comments {
    padding: 1em;
    font-size: 0.9em;
    width: 450px;
    height: 80px;
    margin: 10px auto;
    resize: none;
  }
  .thumb {
    width:50px; height:50px;
    background-size:cover;
    border-radius:50%;
    margin: 0px auto;
  }
  .vDet, .vStat, .bStat {
    border: 1px solid gray;
    padding: 0.2em 0.4em;
    opacity: 0.5;
    cursor: pointer;
  }
  .vDet:hover, .vStat:hover, .bStat:hover {
    opacity: 1;
  }
  #newP{
    border: 1px solid black;
    padding: 0.4em 1em;
    display: inline-block; 
    cursor: pointer;
  }
  #newP:hover{
    background-color: #ededed;
  }
  .thumbsT {
    border-spacing: 3px;
    border-collapse: separate;
    margin: 6px auto;

  }
  .thumbsT td {
    border: 1px solid silver;
    width: 27px;
    height: 20px;
    background-size: cover;
    text-align: center;
    vertical-align: middle;
    font-size: 0.7em;
  }
  #bigPic{ background-size:cover; background-position:center; }
  .editIcon { font-size:1.2em; margin-top:1em; color:#DEB666; }
  .Edt{display:none;}
  .spinner1 { font-size:1.6em; display:none;}
  .check1 { font-size:1.4em; color:lime; display:none; }



  #nuevo { color:#888888;  }
  #nuevo input[type=text], #nuevo textarea { width:86%; }

  #buscar { margin-left:5%; margin-right:0.7em; }

  .topnav {
  width:100vw; background-color: #DEB666; 
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  display:flex;
  justify-content: center;
}

.topnav li {
  cursor:pointer;
}

.topnav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
.topnav li a:hover {
  background-color: #111;
}

.opt3 {
  border:1px solid #DEB666; color:#DEB666; cursor:pointer;
  padding:1em 2em;  border-radius: 4px; margin:1em;
}
.opt3:hover{
  background-color: #fafafa;
}
#modal001 {
  display:none;
  position:fixed; width:100vw; height:100vh;
  background-color:rgba(0,0,0,0.6);
  z-index:100; text-align:center;
  -webkit-backdrop-filter: blur(3px);
      backdrop-filter: blur(3px);
}
#modal01 {
  width:240px; height:240px; border-radius:50%;
  background-color:black; 
  position:relative; margin:auto;
  margin:4em auto;
}
.dz-button{
  border:0; background-color: transparent; color:#888888;
}

#delButton {
    width:80%; max-width:300px; border:1px solid red; display:none;
    border-radius:3px; margin:0.6em auto; cursor:pointer; user-select: none; color:darkred;
  }
  #delButton:hover {
    background-color: rgba(200,0,0,0.1);
  }

  .op40 { opacity:0.4; }
  .op30 { opacity:0.3; }
</style>



HTML;


?>
