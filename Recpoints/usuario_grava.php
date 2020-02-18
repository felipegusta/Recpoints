<?php
require_once("dao/usuario.dao.php");
    //Verificar se é uma Exclusão / Inclusão ou Alteração (nesta sequência)
   if (!isset($_POST["codigo"]) //Inclusão
        || $_POST["codigo"] == ""
        || $_POST["codigo"] == "0"){
        
        $usuarioDAO = new UsuarioDAO();
        $usuario = array($_POST["nome"],$_POST["senha"],$_POST["datanasc"],$_POST["endereco"],$_POST["email"],$_POST["estado"],$_POST["telefone"],$_POST["cidade"]);
        $sucesso = $usuarioDAO->Inserir($usuario);
        
        if ($sucesso){//Sucesso = Registro Inserido
            header("Location: sucesso_login.php?inserido=OK");
        } else { //!Sucesso = Erro ao Inserir
            header("Location: usuarios_form.php?erro=" 
                   . $usuarioDAO->Mensagem);
        }
    } 
        else if (isset($_POST["codigo"]) && $_POST["codigo"] !="0") //Alteração
    { 
        //O IF acima serve para verificar se é alteração
        
        $usuarioDAO = new UsuarioDAO();
        //Tratamento para não Alteração da Senha na modificação do do Usuário
        $usu = $usuarioDAO->BuscarPorCodigo($_POST["codigo"]);
        if ($_POST["senha"]!= $usu["SENHA"]){
            $senha = md5($_POST["SENHA"]);
        } else {
            $senha = $usu["SENHA"];
        }
        
        $usuario =  array($_POST["nome"],$_POST["senha"],$_POST["datanasc"],$_POST["endereco"],$_POST["email"],$_POST["estado"],$_POST["telefone"],$_POST["cidade"]);
        $sucesso = $usuarioDAO->Alterar($usuario);
        
        if ($sucesso){//Sucesso = Registro Alterado
            header("Location: usuarios.php?alterado=OK");
        } else { //!Sucesso = Erro ao Alterar
            header("Location: usuarios_form.php?erro=" 
                   . $usuarioDAO->Mensagem);
        }
    }

?>

