<?php 
if(isset($_POST['Voltar'])){
    header('Location:menu.php');
    
}

include_once("PDO/pdo.php");

if(isset($_POST['cadastrarAliado'])){
    
    $id_usuario = $_POST['idUsuario'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $data_nasc = $_POST['data_nasc'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sexo = $_POST['sexo'];
    $relacao = $_POST['relacao'];



    $result = mysqli_query($conexao, "INSERT INTO aliados(id_usuario, nome, cpf, data_nasc, telefone, cep, email, senha, sexo, relacao )
     VALUES('$id_usuario','$nome', '$cpf', '$data_nasc', '$telefone', '$cep', '$email', '$senha', '$sexo', '$relacao')");
    

}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="CSS/style6.css">
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
        <form method="post" action="CadastroAliado.php">
            <input type="submit" id="Voltar" name="Voltar" value="Voltar">
        </form>
    </header>

    <main>
        <form method="post" action="CadastroAliado.php" id="Form">
            <div>
                <img src="IMG/Perfil_Usuario.png" id="ImgAvatar">
                <h2 id="Acessar">CADASTRAR ALIADO</h2>
            </div>
            <div class="SubContainer">
                <p>ID do usuário:</p>
                <input type="text" name="idUsuario" id="Nome">
                <p></p>
            </div>
            <div class="SubContainer">
                <p>Nome Completo:</p>
                <input type="text" name="nome" id="Nome">
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
                    <input type="text" name="cpf" id="Cpf" oninput="mascara_CPF()" maxlength="14">
                    <p></p>
                </div>
                <div id="InfotxtDTN">
                    <input type="date" name="data_nasc" id="Data">
                    <p></p>
                </div>
                <div id="InfotxtCell">
                    <input type="text" name="telefone" id="Cell" oninput="mascara_Cell()" maxlength="14">
                    <p></p>
                </div>
            </div>
            <div class="SubContainer">
                <p>Cep:</p>
                <input type="text" name="cep" id="cep" oninput="mascara_cep()" maxlength="9">
                <p></p>
            </div>
            <div>
                <p id="PerguntaTipoRelacao">Qual sua relação com o Usuário</p>
                <div>
                    <input type="radio" name="relacao" id="responsavel" value="Responsável">
                    <label for="responsavel">Responsável</label>
                    <input type="radio" name="relacao" id="n_responsavel" value="Não Responsável">
                    <label for="n_responsavel">Não Responsável</label>
                    <p></p>
                </div>
            </div>

            <div>
                <p id="PerguntaPronome">Como podemos te chamar:</p>
                <div>
                    <input type="radio" name="sexo" id="ele" value="masculino">
                    <label for="ele">Ele</label>
                    <input type="radio" name="sexo" id="ela" value="feminino">
                    <label for="ela">Ela</label>
                    <p></p>
                </div>
            </div>

            <div class="SubContainer">
                <p>E-mail:</p>
                <input type="text" name="email" id="Email">
                <p></p>
            </div>
            <div class="SubContainer">
                <p>Senha:</p>
                <input type="password" name="senha" id="pas">
                <p></p>
            </div>
            <div>
                <input type="submit" name="cadastrarAliado" value="Cadastrar Aliado" id="BtnCadastro">
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
                <a href="">
                    <li>Suporte +</li>
                </a>
                <a href="cadastroremedio.html">
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