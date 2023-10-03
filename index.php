<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="CSS/style3.css">
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
        <form id="Form">
            <a href="login.php" class="Voltar">Entrar</a>
            <a href="CadastroUsuario.php" class="Voltar">Cadastrar</a>
        </form>
    </header>

    <main>
        <div id="ContainerP1">
            <img src="IMG/Otimize_rotina.png" id="Otimize">
        </div>
        <div id="ContainerP2">
            <div>
                <img src="IMG/APK_Medique_se.png" id="ImgApk">
            </div>
            <div>
                <div id="AcesseApp">
                    <a href="#" id="AcesseApp_a">Acesse o app</a>
                </div>
                <div id="InfoApp">
                    <h1>Baixe o nosso app, para ter um controle efetivo de seus medicamentos.
                        Com ele podemos te ajudar com sua rotina. </h1>
                </div>
            </div>
        </div>
        <div>
            <img src="IMG/Medique_se_bem2.png" id="ImgMedique">
        </div>
        <div id="InfoNos">
            <h1 id="Nos">SOBRE NÓS</h1>
            <h1>Um grupo escolar, que decidiu pesquisar mais sobre a
                rotina de medicamentos das pessoas, e apartir de estudos criaram o MEDIQUE-SE BEM, pensando nesta ideia
                desde o zero. percorrem uma jornada
                até chegar em cada pessoa, e fazer a diferença em sua vida.</h1>
        </div>
        <div id="ContainerP3">
            <h1>FEITO PARA TODAS IDADES</h1>
            <div id="BarraAzul"></div>
        </div>
        <div id="ContainerP4">
            <div id="Barracinza">
                <h1>MEDIQUE-SE BEM, foi criado para auxilar a todos em suas rotina,
                    até quem não toma medicamentos pode utilizar de nossos recursos para organizar sua “rotina medica”.
                    desenvolvemos recursos para que você tenha
                    todo o seu percurso medico salvo e seguro com si, e organizao. </h1>
            </div>
        </div>
        <div id="ContainerP5">
            <div>
                <img src="IMG/IdosaRemedio.png" id="IdosaRemedio">
            </div>
            <form method="post" id="FormDuv">
                <h1>Caso tenha alguma duvida</h1>
                <div class="SubContainer">
                    <h3>Nome</h3>
                    <input type="text" name="" id="">
                </div>
                <div class="SubContainer">
                    <h3>Email</h3>
                    <input type="text" name="" id="">
                </div>
                <div class="SubContainer">
                    <h3>Mensegam</h3>
                    <textarea name="" id="" cols="30" rows="5" style="resize:none" placeholder="Mensagem"></textarea>
                </div>
                <div>
                    <input type="submit" value="Enviar" id="BtnEnviar">
                </div>
            </form>
        </div>
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
                <a href="">
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
</body>

</html>