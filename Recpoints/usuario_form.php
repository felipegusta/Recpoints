
        <script language="javascript">
	function confirmarCadastro(){
		if( document.frm_cadastro.nome.value == "" ||
			document.frm_cadastro.email.value == "" ||
			document.frm_cadastro.senha.value == "" ||
			)
			{
				alert("Campos Obrigatórios");
				return false;
			 }
	
			return	true;						
	}
</script>
<?php

	
    
require_once('dao/usuario.dao.php');
    $codigo = "";
    $nome = "";
    $email ="";
    $senha="";
    $datanasc="";    
    $telefone="";
    $endereco="";
    $cidade="";
    $estado="";
 


    if (isset($_GET["ID_USUARIO"]) && $_GET["ID_USUARIO"] != "0"){
        $usuarioDAO = new UsuarioDAO();
        $usuario = $usuarioDAO->BuscarPorCodigo($_GET["ID_USUARIO"]);
        $codigo = $usuario["ID_USUARIO"];
        $nome = $usuario["NOME_USU"];
        $email = $usuario["EMAIL_USU"];
        $senha = $usuario["SENHA"];
        $datanasc = $usuario["NASCI_USUARIO"];
        $telefone = $usuario["TELEFONE"];
        $endereco = $usuario["END_USU"];
        $cidade = $usuario["CIDADE"];
        $estado = $usuario["ESTADO"];
 
        
    
    }
?>

<header>  
<img src="images/logo2.png">
       
  <?php if (isset($_GET["erro"])){?>
    <div class="alert alert-danger">
        Erro ao <?=$codigo==""?"Incluir":"Alterar";?>: <?=$_GET["erro"];?>
    </div>
<?php }?> 
   
        
        <style>
.Labels{
    
            font-size:15px;

                
        }
        button{
                background-color:#98FB98;
            width: 200px;
            height: 40px;
            font-family: 'arial';
            font-size: 20px;
            color: black;
            border:solid;
            border-radius: 30px;
            border-color: black;
            margin-top:40px;
            margin-left:10px;
                }
            
            
      
            .container {
         width: 100vw;
         height: 100vh;
         background: #4dff88;
         display: flex;
        flex-direction: row;
         text-align:center;
               
     }
     .box {
         width: 25%;
         height: 25%;
         background: rgb(255, 255, 255);
         border:solid;
         border-color: grey;
         border-radius: 30px;
         margin-top:8px;
            
     }
     
            			input{
				width: 300px ;
            height: 30px ;
				border-radius:30px;
				border-color: white;
			    border :groove;
            }
			body{
	background: url("images/bg-3.jpg") center no-repeat;
     background-size: 100%;
   background-size: cover;
	position: inherit;
}
			h1{
				font-family:"Gill Sans", sans-serif;
				font-size: 40px;
				text-align:center;
				
		}
    </style>    
        
       
      <body class="body">  
     <?php if (isset($_GET["erro"])){?>
    <div class="alert alert-danger">
        Erro ao <?=$codigo==""?"Incluir":"Alterar";?>: <?=$_GET["erro"];?>
    </div>
<?php }?>   
    <form class="box" name="frm_cadastro" action="usuario_grava.php" method="post">
        
    <h1>Cadastre-se </h1>
      
    <center><input type="hidden" name="codigo" id="codigo" value="<?=$codigo?>" /><center/>
    
        <center>  <labels for="nome" class="control-label">Nome</labels><center/>
    <center>  <input type="text" maxlength="40" required name="nome" id="nome" class="form-control" placeholder="Nome" value="<?=$nome?>" /><center/>
    </div>
    <div>
    <center> <labels for="email" class="control-label">E-Mail</labels><center/>
    <center> <input type="text" maxlength="40" required name="email" id="email" class="form-control" placeholder="E-mail" value="<?=$email?>" /><center/>
    </div>
    <div>
    <center> <labels for="senha" class="control-label">Senha</labels><center/>
    <center> <input type="password" maxlength="20" required name="senha" id="senha" class="form-control" placeholder="Senha" value="<?=$senha?>" /><center/>
        
    </div>
        <div>
        <center> <labels for="datanasc" class="control-label">Data de Nascimento</labels><center/>
        <center><input type="text" maxlength="40" required name="datanasc" id="datanasc" class="form-control" placeholder="Data de Nascimento" value="<?=$datanasc?>" /><center/
        
    </div>
        <div>
        <labels for="telefone" class="control-label">Telefone</labels><center/>
    <input type="text" maxlength="40" required name="telefone" id="telefone" class="form-control" placeholder="Telefone"  value="<?=$telefone?>" /><center/>
    </div>
     <div>
     <center> <labels for="endereco" class="control-label">Endereço</labels><center/>
     <center><input type="text" maxlength="40" required name="endereco" id="endereco" class="form-control" placeholder="Endereço" value="<?=$endereco?>" /><center/>
    </div>       
         <div>
         <center><labels for="cidade" class="control-label">Cidade</labels><center/>
         <center><input type="text" maxlength="40" required name="cidadae" id="cidade" class="form-control" placeholder="Cidade" value="<?=$cidade?>" /><center/>
    </div>
        <div>
        <center> <labels for="estado" class="control-label">Estado</labels><center/>
        <center><input type="text" maxlength="2" required name="estado" id="estado" class="form-control" placeholder="Estado" value="<?=$estado?>" /><center/>
    </div>
        
        
      
   <button class="button" type="submit">Salvar</button>
    
    
    </form>
               
    </div>
                    
</header>

<?php include("inc/rodape.php");


?>