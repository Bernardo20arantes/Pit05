<?php 
if(isset($_POST["Voltar"])){

    header("Location: menu.php");

}

if(!empty($_GET['id'])){
    include_once("PDO/pdo.php");

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM medicamentos WHERE id=$id";

    $result = $conexao->query($sqlSelect);


    if($result->num_rows > 0){

        while($user_data = mysqli_fetch_assoc($result)){


        $apelido = $user_data['apelido'];
        $tipoMan = $user_data['tipoMan'];
        $dosagem = $user_data['dosagem'];
        $tipoGen = $user_data['tipoGen'];
        $nomeMedicamento = $user_data['nome'];
        $caixas = $user_data['caixas'];
        $comprimidos = $user_data['comprimidos'];
        $efeito = $user_data['efeito'];
        $farmaceutica = $user_data['farmaceutica'];
        $frequencia = $user_data['frequencia'];
        $horario = $user_data['horario'];
        }
    }
    else{
        header('Location: meusMedicamentos.php');
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
            <input type="submit" name="Voltar" id="Voltar" value="Voltar">
        </form>
    </header>

    <main>
        <form method="post" action="saveAlteracaoMed.php" id="Form">
            <div>
                <img src="IMG/RemedioCadastro.png" id="ImgAvatar">
                <h2 id="Acessar">Alterar Dados Remedios</h2>
            </div>
            <div class="SubContainer">
                <p>APELIDO DO MEDICAMENTO:</p>
                <input type="text" name="ApelidoMedicamento" id="ApelidoMedicamento" value="<?php echo $apelido?>">
                <br>
            </div>
            <div>
                <input type="radio" name="tipoMan" id="man" value="MANIPULADO"  <?php echo ($tipoMan == 'MANIPULADO') ? 'checked' : '' ?>>
                <label for="man">Manipulado</label>
                <input type="radio" name="tipoMan" id="n_manipulado" value="NAO MANIPULADP" <?php echo ($tipoMan == 'NAO MANIPULADO') ? 'checked' : '' ?>>
                <label for="n_manipulado">Não manipulado</label>
                <p></p>
            </div>
            <div id="ContainerMiligramas">
                <p>MILIGRAMAS DO MEDICAMENTO:</p>
                <input type="text" name="dosagem" id="Miligramas" value="<?php echo $dosagem?>">
                <br>
            </div>
            <div>
                <p id="PerguntaTipoMEDICAMENTO">Tipo do Medicamento:</p>
                <div>
                    <input type="radio" name="tipoGen" id="generico" value="generico" <?php echo ($tipoGen == 'GENERICO') ? 'checked' : '' ?>>
                    <label for="generico">GENÉRICO</label>
                    <input type="radio" name="tipoGen" id="Original" value="original" <?php echo ($tipoGen == 'ORIGINAL') ? 'checked' : '' ?>>
                    <label for="Original">Original</label>
                    <br>
                </div>
            </div>
            <div class="SubContainer">
                <p>NOME DO MEDICAMENTO:</p>
                <input type="text" name="nome" id="NomeMedicamento" value="<?php echo $nomeMedicamento?>">
                <br>
            </div>
            <div class="SubContainer">
                <p>Quantidade:</p>
            </div>
            <div id="ContainerQuantidade">
                <div class="">
                    <p>Caixas:</p>
                    <input type="text" name="QuantidadeCaixas" class="Quantidade" value="<?php echo $caixas?>">
                    <br>
                </div>
                <div class="">
                    <p>Comprimidos:</p>
                    <input type="text" name="QuantidadeComprimidos" class="Quantidade" value="<?php echo $comprimidos?>">
                    <br>
                </div>
            </div>
            <div class="SubContainer">
                <p>Efeitos:</p>
                <input type="text" name="efeito" id="efeitos" value="<?php echo $efeito?>">
                <br>
            </div>
            <div class="SubContainer">
                <p>FARMACEUTICA:</p>
                <input type="text" name="Farmaceutica" id="Farmaceutica" value="<?php echo $farmaceutica?>">
                <br>
            </div>
            <div>
                <p id="HoraMedicamento">HORÁRIO DO MEDICAMENTO :</p>
                <div id="HoraRemedio">
                    <input type="radio" name="Horario" id="4horas" value="A cada 4 horas" <?php echo ($frequencia == 'A cada 4 horas') ? 'checked' : '' ?>>
                    <label for="4horas">A cada 4 horas</label>
                    
                    <input type="radio" name="Horario" id="6horas" value="A cada 6 horas" <?php echo ($frequencia == 'A cada 6 horas') ? 'checked' : '' ?>>
                    <label for="6horas">A cada 6 horas</label>
                    
                    <input type="radio" name="Horario" id="8horas" value="A cada 8 horas" <?php echo ($frequencia == 'A cada 8 horas') ? 'checked' : '' ?>>
                    <label for="8horas">A cada 8 horas</label>
                    
                    <input type="radio" name="Horario" id="12horas" value="A cada 12 horas" <?php echo ($frequencia == 'A cada 12 horas') ? 'checked' : '' ?>>
                    <label for="12horas">A cada 12 horas</label>
                    
                    <input type="radio" name="Horario" id="Dia" value="A cada dia" <?php echo ($frequencia == 'A cada dia') ? 'checked' : '' ?>>
                    <label for="Dia">A cada Dia</label>
                </div>
            </div>
            <div class="SubContainer">
                <p>QUE HORAS PRETENDE COMEÇAR:</p>
                <input type="time" name="HoraComeco" id="HoraComeco" value="<?php echo $horario?>">
                <br>
            </div>
            <input type="hidden" name="id" value="<?php echo $id?>">
            <div>
                <input type="submit" name="update"  value="Editar Medicamento" id="BtnCadastro">
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