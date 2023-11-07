<?php 
if(isset($_POST["Voltar"])){
    header("Location: menu.php");
}

if(!empty($_GET['id'])){
    include_once("PDO/pdo.php");

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0){

        while($user_data = mysqli_fetch_assoc($result)){

        $nome = $user_data['nome'];
        $cpf = $user_data['cpf'];
        $email = $user_data['email'];
        $senha = $user_data['senha'];
        $telefone = $user_data['telefone'];
        $cep = $user_data['cep'];
        $sexo = $user_data['sexo'];
        $data_nasc = $user_data['data_nasc'];
        }
    }
    else{
        header('Location: meusDados.php');
    }

}


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="shortcut icon" href="IMG/farmácia.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;700&display=swap" rel="stylesheet">
    <script src="script.js"></script>
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
        <form action="index.html" method="post">
            <input type="submit" id="Voltar" name="Voltar" value="Voltar">
        </form>
    </header>

    <main>
        <form action="saveAlteracaoUser.php" method="post" id="Form">
            <div>
                <img src="IMG/Perfil_Usuario.png" id="ImgAvatar">
                <h2 id="Acessar">ALTERAR DADOS</h2>
            </div>
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
                    <input type="text" name="cpf" id="Cpf" oninput="mascara_CPF()" maxlength="14" value="<?php echo $cpf?>">
                    <p></p>
                </div>
                <div id="InfotxtDTN">
                    <input type="date" name="data_nasc" id="Data" value="<?php echo $data_nasc?>">
                    <p></p>
                </div>
                <div id="InfotxtCell">
                    <input type="text" name="telefone" id="Cell" oninput="mascara_Cell()" maxlength="14" value="<?php echo $telefone?>">
                    <p></p>
                </div>
            </div>
            <div class="SubContainer">
                <p>Cep:</p>
                <input type="text" name="cep" id="cep" oninput="mascara_cep()" maxlength="9" value="<?php echo $cep?>">
                <p></p>
            </div>
            <div>
                <p id="PerguntaPronome">Como podemos te chamar:</p>
                <div>
                    <input type="radio" name="genero" id="ele" value = "masculino" <?php echo ($sexo == 'masculino') ? 'checked' : '' ?>>
                    <label for="ele">Ele</label>
                    <input type="radio" name="genero" id="ela" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : '' ?>>
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
            <input type="hidden" name="id" value="<?php echo $id?>">
            <div>
                <input type="submit" name="editar" value="Salvar Alterações" id="BtnCadastro">
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