<?php include("inc/topo.php");?>


<!DOCTYPE html>
<html>

<head>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
h1{
    font-family:"Gill Sans", sans-serif ;
}
h2{
    font-family:"Gill Sans", sans-serif ;
    
}
p{
    font-size:18px;
}
body{
	background:#ccc url(images/bg-3.jpg) center top no-repeat;
	background-size:100%;
	background-attachment:fixed;
}
</style>

</head>

<body>
<div class="w3-panel w3-white w3-card-4">
<div class="w3-panel w3-border-left w3-border-blue">
<h2 class="w3-center">Empresas Parceiras</h2>
</div></div>
<div class="w3-content w3-section" style="max-width:800px">
<center>  <img class="mySlides" src="images/empresa.png" style="width:700px "></center> 
<center>  <img class="mySlides" src="images/empresa2.png" style="width:700px"> </center>
<center> <img class="mySlides" src="images/empresa3.png" style="width:700px"></center> 
</div>
<div>
<div class="w3-panel w3-white w3-card-4">
			<div class="w3-panel w3-border-left w3-border-blue">
<center><h1>EMPRESA 1<h1></center> 
<p>A EMPRESA1 busca junto ao Recpoints inserir a sustentabilidade em seus negócios com o objetivo de aumentar sua capacidade de prosperar no longo prazo diante de um ambiente competitivo e dinâmico. Caminhamos em direção à uma nova economia alinhada aos desafios de desenvolvimento que nos leva a incorporar aspectos sociais e ambientais na gestão de riscos e de oportunidades para garantir resultados positivos e gerar valor compartilhado.
</p>
<center><h1>EMPRESA 2<h1></center>
<p>O EMPRESA 2 acredita que com ajuda do Recpoints pode fazer sua parte para promover o desenvolvimento socioambiental de forma responsável em todos os elos da cadeia de valor, o que inclui desde a extração de matérias-primas, passando pela fabricação do produto, até o seu descarte pelo consumidor final.
</p>
<center><h1>EMPRESA 3<h1></center>
<p>A EMPRESA 3 está comprometida com parceria ao Recpoints em agregar o benefício ambiental e social sem perder o foco na gestão dos negócios, oferecendo funcionalidades que são percebidas pelos consumidores como valor agregado, aumentando a probabilidade de obter retorno econômico e aumentar sua vantagem competitiva. Tratar as questões ambientais e sociais como estratégicas é um processo de contínuo aprimoramento e traz para o BB a possibilidade de identificar novas oportunidades de negócios.
</p>
</div>
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>
<?php include("inc/rodape.php"); ?>