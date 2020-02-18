<!DOCTYPE html>
<?php 
    $tituloPagina = "Usuários";
?>
<?php include('inc/topo.php');?>
   <style>     
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
    margin-bottom: 200px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
       }
    .dive {
         width: 100vw;
         height: 100vh;
         background: aliceblue;
         display: flex;
        flex-direction: row;
         justify-content: center;
         align-items: center;
}
       h1{
				font-family:"Gill Sans", sans-serif;
				font-size: 30px;
				text-align:center;
				
			}
            h3{
                font-family:"Gill Sans", sans-serif;
                text-align:center;
                font-size:25px;
                width: 100%;
            }
			p{
                font-family:"Gill Sans", sans-serif;
				font-size: 25px;
				text-align:center;
        }
</style>
<?php
    require_once("dao/usuario.dao.php");
    $usuarioDAO = new UsuarioDAO();
    
    $listaRanking = $usuarioDAO->ListarRanking();
        
?>
<center><h1>Os 10 melhores Recpointers</h1></center>

<body class="body">
    <div class="dive">
<table id="customers">
    <thead>
        <tr>
            
            <th>Nome</th>
            
            <th>Pontos</th>
        </tr>
    </thead>
    <tbody>
<?php 
        //Varre os Dados, Listando-os no "Grid"
        foreach($listaRanking as &$usuario) {
        ?>  
        
            
            <td><?=$usuario["NOME_USU"];?></td>
            
            <td><?=$usuario["PONTOS_USU"];?>
       
            </td>
        </tr>
<?php 
        }
        ?>        
    </tbody>
</table>
<br>
</div>
    
<?php include("inc/rodape.php");?>