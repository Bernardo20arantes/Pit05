<?php 

include_once('PDO/pdo.php');

if(isset($_POST['update'])){
    
    $id = $_POST['id'];
    $apelido = $_POST['apelido'];
    $tipoMan = $_POST['tipoMan'];
    $dosagem = $_POST['dosagem'];
    $tipoGen = $_POST['tipoGen'];
    $nomeMedicamento = $_POST['nome'];
    $caixas = $_POST['caixas'];
    $comprimidos = $_POST['comprimidos'];
    $efeitos = $_POST['efeito'];
    $farmaceutica = $_POST['farmaceutica'];
    $frequencia = $_POST['frequencia'];
    $horario = $_POST['horario'];

    
    $sqlUpdate = "UPDATE medicamentos SET apelido = '$apelido', tipoMan = '$tipoMan' , dosagem = '$dosagem', tipoGen = '$tipoGen', nome = '$nome', caixas = $caixas, comprimidos = '$comprimidos', efeito = '$efeito', farmaceutica = '$farmaceutica', frequencia = '$frequencia', horario = '$horario' WHERE id = '$id'";

    $result = $conexao->query($sqlUpdate);
}

header('Location: meusMedicamentos.php');

?>