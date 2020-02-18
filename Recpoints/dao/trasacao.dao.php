<?php
include_once(__DIR__."/../inc/conexao.php");

class TransacaoDAO extends Conexao {

    
    function Transacao($valores){
        $comando = $this->prepare(
                       "SELECT * FROM transacao t
INNER JOIN usuario u ON  t.ID_TRANSACAO = u.ID_USUARIO 
INNER JOIN p_reciclagem p ON t.ID_TRANSACAO = p.ID_CENTRO");
        
        $comando = array($valores);
        try {
            
            $comando->execute($transacao);
            
            $comando->setFetchMode(PDO::FETCH_ASSOC);
            
            $transacao = $comando->fetchAll();
            
            return $transacao;
            
        } catch (Exception $e){
            $this->Mensagem = $e->getMessage();
        }
    }
         function Alterar($valore
                          
                          
                          
                          ,
                            s){
        $comando = $this->prepare("UPDATE transacao 
                                   SET ID_CENTRO = ?, ID_USUARIO = ?
                                   WHERE ID_TRANSACAO = ? ");
        try{
            $comando->execute($valores);
            return true;
        } catch(Exception $e){
            $this->Mensagem = $e->getMessage();
            return false;
        }
    }
    //Método Excluir - Apaga 1 Registro do Banco correspondente ao $codigo recebido
    function Excluir($codigo){
        $comando = $this->prepare("DELETE FROM transacao
                                   WHERE  ID_TRANSACAO = ?");
        $valores = array($codigo);
        try{
            $comando->execute($valores);
            return true;
        } catch(Exception $e){
            $this->Mensagem = $e->getMessage();
            return false;
        }   
    }
}
    ?>