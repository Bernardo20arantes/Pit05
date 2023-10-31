<?php
if(isset($_POST["AltRemedio"])){
    header("Location: AlterarRemedio.php");
}
if(isset($_POST["CadRemedio"])){
    header("Location: CadastroRemedio.php");
}
if(isset($_POST["CadAliado"])){
    header("Location: CadastroAliado.php");
}
if(isset($_POST["AltAliado"])){
    header("Location: AlterarAliado.php");
}
if(isset($_POST["Voltar"])){
    header("Location: home.php");
}


session_start();
include_once('PDO/pdo.php');
//print_r($_SESSION);

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){

     unset($_SESSION['email']);
     unset($_SESSION['senha']);
     header('Locations: login.php');
}

$logado = $_SESSION['email']; 


$sql = "SELECT * FROM usuarios  WHERE email = '" . $logado . "' ORDER BY id DESC";

$result = $conexao->query($sql);

//print_r($result);

///////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////
if(!empty($_GET['id'])){
    include_once("config.php");

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0){

        while($user_data = mysqli_fetch_assoc($result)){

        $nome = $user_data['nome'];
        $cpf = $user_data['cpf'];
        $cep = $user_data['cep'];
        $info = $user_data['info'];
        $email = $user_data['email'];
        $senha = $user_data['senha'];
        $telefone = $user_data['telefone'];
        $sexo = $user_data['sexo'];
        $data_nasc = $user_data['data_nasc'];
       
        }
    }
    else{
        header('Location: home.php');
    }

}

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
                <input type="submit" value="Cadastrar">
            </form>
            <form method="post" class="Form">
                <div>
                    <h3>Remedio - Alterar</h3>
                </div>
                <div>
                    <input type="submit" value="Alterar">
                    <input type="submit" value="Deletar">
                </div>
            </form>
        </div>
        <div id="Formulario2">
            <form method="post" class="Form">
                <h3>Aliado - Cadastrar</h3>
                <input type="submit" value="Cadastrar">
            </form>
            <form method="post" class="Form">
                <div>
                    <h3>Aliado- Alterar</h3>
                </div>
                <div>
                    <input type="submit" value="Alterar">
                    <input type="submit" value="Deletar">
                </div>
            </form>
        </div>
        <div id="Formulario2">
            <form method="post" class="Form">
                <h3>Consultas - Cadastrar</h3>
                <input type="submit" value="Cadastrar">
            </form>
            <form method="post" class="Form">
                <div>
                    <h3>Consultas- Alterar</h3>
                </div>
                <div>
                    <input type="submit" value="Alterar">
                    <input type="submit" value="Deletar">
                </div>
            </form>
        </div>
        <div id="FormEdit">
            <h2>Editar Dados Pessoais</h2>
            <div>
                <form method="post" id="Form">
                    <div class="SubContainer">
                        <p>Nome Completo:</p>
                        <input type="text" name="nome" id="Nome" value="<?php echo $nome?>">
                        <p></p>
                    </div>
                    <div id="ParteInformacoes">

                        <div id="InfoLabelCPF">
                            <label>CPF:</label>
                        </div>
                        <div id="InfoLabelDTN">
                            <label>Data de Nascimento:</label>
                        </div>
                        <div id="InfoLabelCell">
                            <label>Telefone ou Celular</label>
                        </div>
                        <div id="InfoImgCell">
                            <img src="IMG/Celular.png" id="ImgCell">
                        </div>
                        <div id="InfotxtCpf">
                            <input type="text" name="CPF" id="Cpf" value="<?php echo $cpf?>" oninput="mascara_CPF()" maxlength="14">
                            <p></p>
                        </div>
                        <div id="InfotxtDTN">
                            <input type="date" name="data_nasc" id="Data" value="<?php echo $data_nasc?>">
                            <p></p>
                        </div>
                        <div id="InfotxtCell">
                            <input type="text" name="telefone" id="Cell" value="<?php echo $telefone?>" oninput="mascara_Cell()" maxlength="14">
                            <p></p>
                        </div>
                    </div>
                    <div class="SubContainer">
                        <p>Cep:</p>
                        <input type="text" name="" id="cep" value="<?php echo $cep?>" oninput="mascara_cep()" maxlength="9">
                        <p></p>
                    </div>
                    <div>
                        <p>Nos conte o que você tem: </p>
                        <textarea name="info" id="info" value="<?php echo $info?>" cols="70" rows="2"
                            style="resize: none; border-radius: 10px; width: 96%; margin-left: 2%;"></textarea>
                    </div>
                    <div>
                        <p id="PerguntaPronome">Como podemos te chamar:</p>
                        <div>
                            <input type="radio" name="genero" id="ele" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : '' ?>>
                            <label for="ele">Ele</label>
                            <input type="radio" name="genero" id="ela" value="feminino" <?php echo ($sexo == 'masculino') ? 'checked' : '' ?>>
                            <label for="ela">Ela</label>
                            <p></p>
                        </div>
                    </div>
                    <div class="SubContainer">
                        <p>E-mail:</p>
                        <input type="text" name="email" id="Email" value="<?php echo $email?>">
                        <p></p>
                    </div>
                    <div class="SubContainer">
                        <p>Senha:</p>
                        <input type="text" name="senha" id="senha" value="<?php echo $senha?>">
                        <p></p>
                    </div>
                    <div>
                        <input type="submit" value="Alterar" id="BtnCadastro">
                        <input type="submit" value="Deletar" id="BtnCadastro">
                    </div>
                </form>
            </div>
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