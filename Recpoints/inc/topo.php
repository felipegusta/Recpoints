<?php
    session_start();
    if (!isset($_SESSION["usuario"]))
    {
        
        
        
        header("Location: index.php");
        exit();
      
    }
?>

<!DOCTYPE html>
<link href="css/estilo.css" rel="stylesheet">

    <html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

        </head>
        <style>
        
        .body {
        margin: 0px;
            }
            .tela { color: red;
            font-family: "Arial"
                ; font-size: 100px;
            }
        
        
        </style>
    
<header>
    
    
    <ul>
  <li><a href="Sobre.php">Sobre</a></li>
  <li><a href="usuarios.php">Ranking</a></li>
<li><a href="home.php">Principal</a></li>
  <li><a href="materiais_form.php">Faça sua coleta!</a></li>
       
       
</ul>
    <div >
       
          </div>
    <center><img class="img" src="images/logo2.png"/></center>
    </header>
  

        
    
 
        
        <div class="div">   
           <ul>
                <li><a href="logout.php">sair</a></li>
               <li><a href="perfil.php"><?=$_SESSION["usuario.nome"];?></a></li> <li><a>Meus Pontos: <?=$_SESSION["usuario.pontos"];?></a></li>            
    </ul>
<body class="body"> 
