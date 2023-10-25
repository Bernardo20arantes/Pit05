<?php
if(isset($_POST["Voltar"])){
    header("Location: menu.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="CSS/style2.css">
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
            <input type="submit" id="Voltar" name="Voltar" value="Voltar">
        </form>
    </header>

    <main>
        <form method="post" id="Form">
            <div>
                <img src="IMG/RemedioCadastro.png" id="ImgAvatar">
                <h2 id="Acessar">Cadastrar Remedios</h2>
            </div>
            <div class="SubContainer">
                <p>APELIDO DO MEDICAMENTO:</p>
                <input type="text" name="ApelidoMedicamento" id="ApelidoMedicamento">
                <br>
            </div>
            <div>
            <p style="text-align: center;font-size: 20px; margin-bottom: 10px;">
            O Remédio é Manipulado ou não?</p>
                <input type="radio" name="tipoManipulado" id="manipulado">
                <label for="manipulado">Manipulado</label>
                <input type="radio" name="tipoManipulado" id="n_manipulado">
                <label for="n_manipulado">Não manipulado</label>
                <p></p>
            </div>
            <div id="ContainerMiligramas">
                <p>MILIGRAMAS DO MEDICAMENTO:</p>
                <input type="text" name="MILIGRAMAS" id="Miligramas">
                <br>
            </div>
            <div>
                <p id="PerguntaTipoMEDICAMENTO">Tipo do Medicamento:</p>
                <div>
                    <input type="radio" name="Medicamento" id="generico">
                    <label for="generico">GENÉRICO</label>
                    <input type="radio" name="Medicamento" id="Original">
                    <label for="Original">Original</label>
                    <br>
                </div>
            </div>
            <div class="SubContainer">
                <p>NOME DO MEDICAMENTO:</p>
                <input type="text" name="NomeMedicamento" id="NomeMedicamento">
                <br>
            </div>
            <div class="SubContainer">
                <p>Quantidade:</p>
            </div>
            <div id="ContainerQuantidade">
                <div class="">
                    <p>Caixas:</p>
                    <input type="text" name="QuantidadeCaixas" class="Quantidade">
                    <br>
                </div>
                <div class="">
                    <p>Comprimidos:</p>
                    <input type="text" name="QuantidadeComprimidos" class="Quantidade">
                    <br>
                </div>
            </div>
            <div class="SubContainer">
                <p>Efeitos:</p>
                <input type="text" name="Efeitos" id="Efeitos">
                <br>
            </div>
            <div class="SubContainer">
                <p>FARMACEUTICA:</p>
                <input type="text" name="Farmaceutica" id="Farmaceutica">
                <br>
            </div>
            <div>
                <p id="HoraMedicamento">HORÁRIO DO MEDICAMENTO :</p>
                <div id="HoraRemedio">
                    <input type="radio" name="Horario" id="4horas">
                    <label for="4horas">A cada 4 horas</label>
                    
                    <input type="radio" name="Horario" id="6horas">
                    <label for="6horas">A cada 6 horas</label>
                    
                    <input type="radio" name="Horario" id="8horas">
                    <label for="8horas">A cada 8 horas</label>
                    
                    <input type="radio" name="Horario" id="12horas">
                    <label for="12horas">A cada 12 horas</label>
                    
                    <input type="radio" name="Horario" id="Dia">
                    <label for="Dia">A cada Dia</label>
                </div>
            </div>
            <div class="SubContainer">
                <p>QUE HORAS PRETENDE COMEÇAR:</p>
                <input type="time" name="HoraComeco" id="HoraComeco">
                <br>
            </div>
            <div>
                <input type="submit" value="Cadastrar Medicamentos" id="BtnCadastro">
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
</body>

</html>