<?php 

include_once('PDO/pdo.php');

if(isset($_POST['updateAliado'])){
   
    $id = $_POST['id'];

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $data_nasc = $_POST['data_nasc'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sexo = $_POST['sexo'];
    $relacao = $_POST['relacao'];

    
    $sqlUpdate = "UPDATE aliados SET nome = '$nome', cpf = '$cpf' , data_nasc = '$data_nasc', telefone = '$telefone', cep = '$cep', email = '$email', senha = '$senha', sexo = '$sexo', relacao = '$relacao' WHERE id = '$id'";

    $result = $conexao->query($sqlUpdate);
}

header('Location: meusAliados.php');

?>