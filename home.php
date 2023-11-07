<?php 
if(isset($_POST['Menu'])){
    header('Location:menu.php');
}
if(isset($_POST['Sair'])){
    header('Location:saida.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="CSS/style4.css">
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
            <input type="submit" name="Menu" value="Menu" id="Menu"><p> </p>
            
        </form>
    </header>

    <main>
        <div id="Container">
            <div id="ContainerP1">
                <img src="IMG/EstamosC_Vc.png" id="Otimize">
            </div>
            <div id="ContainerP2">
                <div>
                    <img src="IMG/Tempo.png" id="Tempo">
                </div>
                <div id="Dados">
                    <h1 id="dados1">MEDICAMENTO B <span id="Cor">PENDETE</span></h1>
                    <h1 id="dados2">REMEDIO A</h1>
                    <h1 id="dados3">REMEDIO B</h1>
                    <h1 id="dados4">REMEDIO C</h1>
                    <div id="tempo1">
                        <h4>12:30</h4>
                    </div>
                    <div id="tempo2">
                        <h4>13:45</h4>
                    </div>
                    <div id="tempo3">
                        <h4>14:45</h4>
                    </div>
                </div>
            </div>
            <div id="ContainerP3">
                <h1>Tome o <br> Remedio</h1>
                <h4>12:30</h4>
                <h2>Alerta</h2>
            </div>
            <div id="ContainerP4">
                <div>
                    <input type="submit" value="Tomei" class="subC">
                </div>
                <div id="SubBaixo">
                    <input type="submit" value="Hoje Não" class="subC">
                    <input type="submit" value="5 min" class="subC">
                </div>
            </div>
            <div>
                <input type="submit" value="MEUS MEDICAMENTOS" id="Medicamentos">
            </div>
            <div id="ContainerP5">
                <div id="Barracinza">
                    <ul>
                        <li>Remédio A</li>
                        <li>Remédio B</li>
                        <li>Remédio B</li>
                    </ul>
                </div>
                <div id="Barracinza2">
                    <ul id="imagemList">
                        <li><img src="IMG/Pilula.png" class="Pilula"></li>
                        <li><img src="IMG/Pilula.png" class="Pilula"></li>
                        <li><img src="IMG/Pilula.png" class="Pilula"></li>
                        <li><img src="IMG/Pilula.png" class="Pilula"></li>
                        <li><img src="IMG/PilulaNula.png" class="Pilula"></li>
                        <li><img src="IMG/PilulaNula.png" class="Pilula"></li>
                    </ul>
                    <p id="Pquantidade">*quantidade atual”/*quantidade total*</p>
                </div>
                <div id="Barracinza3">
                    <ul id="imagemList">
                        <li><img src="IMG/Pilula.png" class="Pilula"></li>
                        <li><img src="IMG/Pilula.png" class="Pilula"></li>
                        <li><img src="IMG/PilulaNula.png" class="Pilula"></li>
                        <li><img src="IMG/PilulaNula.png" class="Pilula"></li>
                        <li><img src="IMG/PilulaNula.png" class="Pilula"></li>
                        <li><img src="IMG/PilulaNula.png" class="Pilula"></li>
                    </ul>
                    <h4>02/25</h4>
                </div>
                <div id="Barracinza4">
                    <ul id="imagemList">
                        <li><img src="IMG/Pilula.png" class="Pilula"></li>
                        <li><img src="IMG/Pilula.png" class="Pilula"></li>
                        <li><img src="IMG/Pilula.png" class="Pilula"></li>
                        <li><img src="IMG/Pilula.png" class="Pilula"></li>
                        <li><img src="IMG/Pilula.png" class="Pilula"></li>
                        <li><img src="IMG/PilulaNula.png" class="Pilula"></li>
                    </ul>
                    <h4>05/25</h4>
                </div>
            </div>
            <div>
                <h1>Cadastre suas Consulta</h1>
            </div>
            <div id="BarraConsultas">
                <div>
                    <h2>Minhas Consultas</h2>
                    <p></p>
                </div>
                <div id="NulaCinza">
                </div>
                <div>
                    <input type="submit" value="Cadastrar" id="BtnConsulta">
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div id="Links">
            <ul>
                <a href="#">
                    <li>Nós Conheça +</li>
                </a>
                <a href="#">
                    <li>Termos de uso +</li>
                </a>
                <a href="#">
                    <li>Suporte +</li>
                </a>
                <a href="#">
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