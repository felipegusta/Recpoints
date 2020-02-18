<?php
include_once("inc/conexao.php");

class P_reciclagemDAO extends Conexao {
   
    function ListarP_REC(){
        $resultado = $this->query("SELECT * FROM p_reciclagem ORDER BY ID_CENTRO DESC LIMIT 10");
        $resultado->setFetchMode(PDO::FETCH_ASSOC);
        $p_reciclagem = $resultado->fetchAll();
        
        return $p_reciclagem;
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
            $comando->execute($valores);
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
    function BuscarPorCodigo($codigo){
        $comando = $this->prepare("SELECT * FROM p_reciclagem 
                                   WHERE ID_CENTRO = ?");
        try{
            $comando->execute(array($codigo));
            $comando->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $comando->fetchAll();
        } catch(Exception $e){
            $this->Mensagem = $e->getMessage();
        }
        $p_rel = null;
        if (count($resultado)==1){
            $usu = $resultado[0];
        }
        return $p_rel;
    }
}
    ?>