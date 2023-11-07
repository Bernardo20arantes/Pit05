<?php
//botões
if(isset($_POST["meusMedicamentos"])){
    header("Location: meusMedicamentos.php");
}
if(isset($_POST["CadRemedio"])){
    header("Location: CadastroRemedio.php");
}
if(isset($_POST["CadAliado"])){
    header("Location: CadastroAliado.php");
}
if(isset($_POST["meusAliados"])){
    header("Location: meusAliados.php");
}
if(isset($_POST["CadConsulta"])){
    header("Location: CadastroConsulta.php");
}
if(isset($_POST["minhasConsultas"])){
    header("Location: minhasConsultas.php");
}
if(isset($_POST["Voltar"])){
    header("Location: home.php");
}
if(isset($_POST["meusDados"])){
    header("Location: meusDados.php");
}

//mostrar o usuário logado
session_start();
include_once('PDO/pdo.php');


if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){

     unset($_SESSION['email']);
     unset($_SESSION['senha']);
     header('Locations: login.php');
}

$logado = $_SESSION['email']; 


$sql = "SELECT * FROM usuarios  WHERE email = '" . $logado . "' ORDER BY id DESC";

$result = $conexao->query($sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="CSS/style7.css">
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
        <div id="Usuario">
            <img src="IMG/Perfil_Usuario.png" id="ImgUsuario">
           <p><?php echo $logado ?></p>
        </div>
        <div id="Formulario">
            <form method="post" class="Form">
                <h3>Remedio - Cadastrar</h3>
                <input type="submit" name="CadRemedio" value="Cadastrar">
            </form>
            <form method="post" class="Form">
                <div>
                    <h3>Remedio - Alterar</h3>
                </div>
                <div>
                    <input type="submit" name="meusMedicamentos" value="Alterar">
                </div>
            </form>
        </div>
        <div id="Formulario2">
            <form method="post" class="Form">
                <h3>Aliado - Cadastrar</h3>
                <input type="submit" name="CadAliado" value="Cadastrar">
            </form>
            <form method="post" class="Form">
                <div>
                    <h3>Aliado- Alterar</h3>
                </div>
                <div>
                    <input type="submit" name="meusAliados" value="Alterar">
                </div>
            </form>
        </div>
        <div id="Formulario2">
            <form method="post" class="Form">
                <h3>Consultas - Cadastrar</h3>
                <input type="submit" name="CadConsulta" value="Cadastrar">
            </form>
            <form method="post" class="Form">
                <div>
                    <h3>Consultas- Alterar</h3>
                </div>
                <div>
                    <input type="submit" name="minhasConsultas" value="Alterar">
                </div>
            </form>
        </div>
        <div id="Formulario2">
            <form method="post" class="Form">
                <div>
                    <h3>Meus Dados</h3>
                </div>
                <div>
                    <input type="submit" name="meusDados" value="Alterar">
                </div>
            </form>
        </div>
        
    </main>
    <footer>
        <div id="Links">
            <ul>
                <a href="">
                    <li>Nos Conheça +</li>
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