<?php 
if(!empty($_GET['id'])){
    include_once("PDO/pdo.php");

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM consultas WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0){
        
        $sqlDelete = "DELETE FROM consultas WHERE id=$id";
        $resultDelete = $conexao->query($sqlDelete);
    }
        
}
header('Location: minhasConsultas.php');

?>