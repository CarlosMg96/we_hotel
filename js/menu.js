$(document).ready(function(){$("#navigation1").navigation();$("#navigation5").navigation({hidden:true});$(".btn-show").click(function(){$("#navigation5").data("navigation").toggleOffcanvas();});$("#informePDF").click(function(){onclick="ga('send','event','Informe anual 2021','download','informeanual2021',0)";});});