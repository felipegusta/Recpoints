<!DOCTYPE html>
<?php include ("inc/topo.php");

 require_once("dao/trasacao.dao.php");
include_once("dao/p_reciclagem.dao.php");

    
 $codigo = "";
    $p_reciclagem = "";
    $usuario = "";
    $transacao = "";

    if (isset($_GET["ID_TRANSACAO"]) && $_GET["ID_TRANSACAO"] != "0"){
        $transacaoDAO = new TransacaoDAO();
        $transacao = $transacaoDAO->BuscarPorCodigo($_GET["ID_TRANSACAO"]);
        $codigo = $transacao["ID_TRANSACAO"];
        $p_reciclagem = $trascacao["ID_CENTRO"];
   
   
 



?>
<select name="p_reiclagem" >
        <option value="">[Selecione um Ponto]</option>
        <?php
        
        $p_reciclagemDAO = new P_reciclagem();
        $p_reciclagem = $p_reciclagemDAO->ListarP_REC()
            ;
        
        foreach($p_reciclagem as &$p_rel) {
            //Utilizamos uma Expressão Ternária para marcar como Selecionada
            // a categoria selecionada na Alteração
        ?>
<option> <?=$p_rel["ID_CENTRO"]==$p_reciclagem ? "selected":""; ?> value="<?= $p_rel["ID_CENTRO"];?>"><?=$p_rel["NOME_CENTRO"];?></option>
    
<?php       }
    }
?>