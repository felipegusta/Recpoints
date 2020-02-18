<!DOCTYPE html>



        <h1>Digite sua Coleta!</h1>

<?php       
 require_once("dao/materiais.dao.php");
        $codigo = "";
        $tipo = "";
        $quantidade = ""; 
 


    if (isset($_GET["codigo"]) && $_GET["ID_MAT"] != "0"){
        $materiaisDAO = new MateriaisDAO();
        $materiais = $materiaisDAO->BuscarPorCodigo($_GET["ID_MAT"]);
        $codigo = $materiais["ID_MAT"];
        $tipo = $materiais["TIPO_MAT"];
        $quantidade = $materiais["QTD_MAT"];
       
       
       
 ?>
 

<form method="post" action="materiais_grava.php">
Quantidade de material por kg:
<input type= "text" name ="valor1" size ="5"/>
<br>
 Tipo de material:  
<select name="">
<option selected="selected"> Plastico </option>
    <option>Vidro</option>
    <option>Papel</option>
    <option>Organico</option>
    </select>
</form>
<?php include("inc/rodape.php");?>