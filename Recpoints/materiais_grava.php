<?php
require_once("dao/materiais.dao.php");
    //Verificar se é uma Exclusão / Inclusão ou Alteração (nesta sequência)
   if (!isset($_POST["codigo"]) //Inclusão
        || $_POST["codigo"] == ""
        || $_POST["codigo"] == "0"){
        
        $materiaisDAO = new MateriaisDAO();
        
        $materiais = array($_POST["TIPO_MAT"],$_POST["QTD_MAT"],$_POST["QTD_PONTOS"]);
        $qtdpontos = $_GET["QTD_PONTOS"];
                           
                                           
        $sucesso = $usuarioDAO->Inserir($usuario);
        
        if ($sucesso){//Sucesso = Registro Inserido
            header("Location: usuarios.php?inserido=OK");
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
        
        $usuario = array($_POST["NOME_USU"],$_POST["EMAIL_USU"],$senha,$_POST["ID_USUARIO"]);
        $sucesso = $usuarioDAO->Alterar($usuario);
        
        if ($sucesso){//Sucesso = Registro Alterado
            header("Location: usuarios.php?alterado=OK");
        } else { //!Sucesso = Erro ao Alterar
            header("Location: usuarios_form.php?erro=" 
                   . $usuarioDAO->Mensagem);
        }
    }

?>

