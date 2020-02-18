<?php
include_once("inc/conexao.php");

class UsuarioDAO extends Conexao {
   
    function ListarRanking(){
        $resultado = $this->query("SELECT * FROM usuario ORDER BY PONTOS_USU DESC LIMIT 10 " );
        $resultado->setFetchMode(PDO::FETCH_ASSOC);
        $usuarios = $resultado->fetchAll();
        
        return $usuarios;
    }
    
    function Inserir($valores){
        $comando = $this->prepare("INSERT INTO usuario (NOME_USU,SENHA,NASCI_USUARIO,END_USU,EMAIL_USU,ESTADO,TELEFONE,CIDADE) VALUES (?,?,?,?,?,?,?,?)");
        try{
            $comando->execute($valores);
            return true;
        } catch(Exception $e){
            $this->Mensagem = $e->getMessage();
            return false;
        }
    }
    function Alterar($valores){
        $comando = $this->prepare("UPDATE usuario 
                                   SET nome = ?,
                                   email = ?,
                                   senha = ?,
                                   telefone = ?,
                                   endereco = ?,
                                   cidade =?,
                                   uf = ?, 
                                   pontos ?
                                   WHERE codigo = ? ");
        try{
            $comando->execute(array($valores));
            return true;
        } catch(Exception $e){
            $this->Mensagem = $e->getMessage();
            return false;
        }
    }
    function BuscarPorEmail($email){
               $comando = $this->prepare("SELECT * FROM usuario 
                                   WHERE EMAIL_USU = ?");
        try{
            $comando->execute(array($email));
            $comando->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $comando->fetchAll();
        } catch(Exception $e){
            $this->Mensagem = $e->getMessage();
        }
        $usu = null;
        if (count($resultado)==1){
            $usu = $resultado[0];
        }
        return $usu; 
    }
  
    
    function BuscarPorSessao($codigo){
        $comando = $this->prepare("SELECT * FROM usuario 
                                   WHERE codigo = ");
        try{
            $comando->execute(array($codigo));
            $comando->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $comando->fetchAll();
        } catch(Exception $e){
            $this->Mensagem = $e->getMessage();
        }
        $usu = null;
        if (count($resultado)==1){
            $usu = $resultado[0];
        }
        
        return $usu;
        
    }
    function BuscarPorCodigo($codigo){
        $comando = $this->prepare("SELECT * FROM usuario 
                                   WHERE codigo = ?");
        try{
            $comando->execute(array($codigo));
            $comando->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $comando->fetchAll();
        } catch(Exception $e){
            $this->Mensagem = $e->getMessage();
        }
        $usu = null;
        if (count($resultado)==1){
            $usu = $resultado[0];
        }
        return $usu;
    }
    function ListarDados(){
        $resultado = $this->query("SELECT * FROM usuario" );
        $resultado->setFetchMode(PDO::FETCH_ASSOC);
        $usuarios = $resultado->fetchAll();
        
        return $usuarios;
    }
}
    ?>