<?php

if(isset($_POST["Voltar"])){
    header('Location: menu.php');
}

if(!empty($_GET['id'])){
    include_once("PDO/pdo.php");

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM consultas WHERE id=$id";

    $result = $conexao->query($sqlSelect);


    if($result->num_rows > 0){

        while($user_data = mysqli_fetch_assoc($result)){


        $medico = $user_data['medico'];
        $motivo = $user_data['motivo'];
        $data_cons = $user_data['data_cons'];
        $email = $user_data['email'];
        $clinica = $user_data['clinica'];
        $endereco = $user_data['endereco'];
        
        }
    }
    else{
        header('Location: meusAliados.php');
    }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="CSS/style9.css">
    <link rel="shortcut icon" href="IMG/farmácia.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div id="Part1">
            <div id="LogoTipo">
                <h1>Medique-se</h1>
                <h1 id="Lado">BEM</h1>
            </div>
        </div>
        <div id="Pesquisa">
            <input type="search" name="" id="BarraPesquisa">
            <img id="Lupa" src="IMG/LupaPesquisa.png">
        </div>
        <form method="post">
            <input type="submit" name="Voltar" id="Voltar" value="Voltar">
        </form>
    </header>
    <main>
        <form   method="post" action="saveAtualizarConsulta.php" id="Form">
            <div>
                <h1>Cadastrar Consulta</h1>
            </div>
            <div class="SubContainer">
                <p>Nome do Medico:</p>
                <input type="text" name="medico" value="<?php echo $medico?>">
            </div>
            <div class="SubContainer">
                <p>Motivo:</p>
                <input type="text" name="motivo" value="<?php echo $motivo?>">
            </div>
            <div class="SubContainer">
                <p>Data da Consulta:</p>
                <input type="date" name="data_cons" id="InputData" value="<?php echo $data_cons?>">
            </div>
            <div class="SubContainer">
                <p>Email:</p>
                <input type="text" name="email" value="<?php echo $email?>">
            </div>
            <div class="SubContainer">
                <p>Clínica:</p>
                <input type="text" name="clinica" value="<?php echo $clinica?>">
            </div>
            <div class="SubContainer">
                <p>Endereço:</p>
                <input type="text" name="endereco" value="<?php echo $clinica?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $id?>">

            <div>
                <input type="submit" name="updateConsulta" value="Editar Consulta" id="Cadastrar">
            </div>
        </form>
    </main>
    <footer>
        <div id="Links">
            <ul>
                <a href="">
                    <li>Nós Conheça +</li>
                </a>
                <a href="">
                    <li>Termos de uso +</li>
                </a>
                <a href="home.html">
                    <li>Suporte +</li>
                </a>
                <a href="CadastroAliado.html">
                    <li>Mais informações +</li>
                </a>
            </ul>
        </div>
        <div id="IconsFoot">
            <div id="ImgFoot">
                <img src="IMG/Twitter.png" id="IconTwitter">
                <img src="IMG/Pinterest.png" id="IconPinterest">
                <img src="IMG/TikTok.png" id="IconTikTok">
                <img src="IMG/Instagram.png" id="IconInsta">
            </div>
        </div>
    </footer>
    <script src="script.js"></script>
</body>

</html>