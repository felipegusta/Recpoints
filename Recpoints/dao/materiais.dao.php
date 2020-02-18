<?php
include_once("inc/conexao.php");

class MateriaisDAO extends Conexao {
   
    function ListarMateriais(){
        $resultado = $this->query("SELECT * FROM materiais ORDER BY QTD_MAT");
        $resultado->setFetchMode(PDO::FETCH_ASSOC);
        $usuarios = $resultado->fetchAll();
        
        return $usuarios;
    }
    
    function Inserir($valores){
        $comando = $this->prepare("INSERT INTO materiais (ID_MAT,QTD_MAT) VALUES (?,?)");
        try{
            $comando->execute($valores);
            return true;
        } catch(Exception $e){
            $this->Mensagem = $e->getMessage();
            return false;
        }
    }
}