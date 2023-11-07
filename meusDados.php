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
    header("Location: menu.php");
}


session_start();
include_once('PDO/pdo.php');
//print_r($_SESSION);
if (isset($_GET["id"])) {
    $id = $_GET["id"];
}

$id_agr = $_SESSION['id'];

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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
        <div class="m-5 table-bg">
    <table class="table">
      <thead>
        <tr>
              <th scope="col">Cod</th>
              <th scope="col">Nome</th>
              <th scope="col">CPF</th>
              <th scope="col">Senha</th>
              <th scope="col">Email</th>
              <th scope="col">Telefone</th>
              <th scope="col">CEP</th>
              <th scope="col">Sexo</th>
              <th scope="col">Data de Nascimento</th>
              <th scope="col">...</th>
        </tr>
      </thead>
      <tbody>
        <?php 
              while($user_data = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" . $user_data['id'] ."</td>";
                echo "<td>" . $user_data['nome'] ."</td>";
                echo "<td>" . $user_data['cpf'] ."</td>";
                echo "<td>" . $user_data['senha'] ."</td>";
                echo "<td>" . $user_data['email'] ."</td>";
                echo "<td>" . $user_data['telefone'] ."</td>";
                echo "<td>" . $user_data['cep'] ."</td>";
                echo "<td>" . $user_data['sexo'] ."</td>";
                echo "<td>" . $user_data['data_nasc'] ."</td>";
                echo "<td>
                 <a class='btn btn-primary' href='AlterarDados.php?id=$user_data[id]'>
                                      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                        <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                      </svg>
                      </a>

                      <a class='btn btn-danger' href='delete.php?id=$user_data[id]' >
                      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                      <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
                    </svg>
                      </a>
                </td>";
                echo "</tr>";
               
              }
        ?>
      
  </tbody>
</table>
       
       
        
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