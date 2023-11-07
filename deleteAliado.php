<?php 
if(!empty($_GET['id'])){
    include_once("PDO/pdo.php");

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM aliados WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0){
        
        $sqlDelete = "DELETE FROM aliados WHERE id=$id";
        $resultDelete = $conexao->query($sqlDelete);
    }
        
}
header('Location: meusAliados.php');

?>