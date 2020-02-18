<!DOCTYPE html>
<?php include("inc/topo.php");?>


<?php
   require_once("dao/usuario.dao.php");
    $codigo = "";
    $nome = "";
    $email="";
    $senha="";
    if (isset($_GET["codigo"]) && $_GET["ID_USUARIO"] != "0"){
        $usuarioDAO = new UsuarioDAO();
        $usuario = $usuarioDAO->Alterar($_SESSION["ID_USUARIO"]);
        $codigo = $usuario["ID_USUARIO"];
        $nome = $usuario["NOME_USU"];
        $email=$usuario["EMAIL_USU"];
        $senha=$usuario["SENHA"];


        
?>
<body class="body"></body>
<table>
<tbody>       
<tr>
            <td><?=$usuario["codigo"];?></td>
            <td><?=$usuario["nome"];?></td>
            <td><?=$usuario["email"];?></td>
            <td>
        <a href="usuario_form.php?codigo=<?=$usuario["ID_USUARIO"];?>" class="btn btn-sm btn-secondary">Alterar</a> 
            <a href="usuarios_grava.php?excluir=<?=$usuario["codigo"];?>" class="btn btn-sm btn-danger" 
            onclick="return confirm('Confirma a Exclusão do Usuário?');">Excluir</a>
            </td>
        </tr>
<?php 
        }
        ?>        
    </tbody>
</table>

 
<a href="usuario_form.php?codigo=<?=$_SESSION["usuario"];?>" class="btn btn-sm btn-secondary">Alterar</a> 
