<?php 

include_once('PDO/pdo.php');

if(isset($_POST['updateConsulta'])){
   
    $id = $_POST['id'];

    $medico = $_POST['medico'];
    $motivo = $_POST['motivo'];
    $data_cons = $_POST['data_cons'];
    $email = $_POST['email'];
    $clinica = $_POST['clinica'];
    $endereco = $_POST['endereco'];

    
    $sqlUpdate = "UPDATE consultas SET medico = '$medico', motivo = '$motivo' , data_cons = '$data_cons', email = '$email', clinica = '$clinica', endereco = '$endereco' WHERE id = '$id'";

    $result = $conexao->query($sqlUpdate);
}

header('Location: minhasConsultas.php');

?>