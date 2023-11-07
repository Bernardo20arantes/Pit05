<?php 

include_once('PDO/pdo.php');

if(isset($_POST['editar'])){
    
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nasc'];

    
    $sqlUpdate = "UPDATE usuarios SET nome = '$nome', cpf = '$cpf' , senha = '$senha', email = '$email', telefone = '$telefone', cep = $cep, sexo = '$sexo', data_nasc = '$data_nasc' WHERE id = '$id'";

    $result = $conexao->query($sqlUpdate);
}

header('Location: meusDados.php');

?>