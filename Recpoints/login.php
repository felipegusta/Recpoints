<?php
    session_start();

    include_once("dao/usuario.dao.php");

    $mensagem = "Informe seus dados de acesso";
    //verifica se os dados estão preenchidos
    if ($_POST["email"] !="" && $_POST["senha"]!=""){
        
        //Instanciar DAO e Acionar Método para pesquisar o Usuário pelo Email
        $usuarioDAO = new UsuarioDAO();
        $usu = $usuarioDAO->BuscarPorEmail($_POST["email"]);
        
        if ($usu != null){ //Verifica se foi localizado um Usuário com o Email
        
            if ($_POST["senha"] == $usu["SENHA"] ){

                //Armazenar o Usuário como Logado
                $_SESSION["usuario"] = $usu["ID_USUARIO"];
                $_SESSION["usuario.nome"] = $usu["NOME_USU"];
               $_SESSION["usuario.email"] = $usu["EMAIL_USU"];
                $_SESSION["usuario.pontos"] = $usu["PONTOS_USU"];
            
                //Redirecionar para a Principal
                header("Location: home.php");
                exit();
            }
        }
        $mensagem = "Credenciais Incorretas";
    }
    header("Location: index.php?mensagem=$mensagem");
?>