<?php 
   session_start();

   if(isset($_POST['entrar']) && !empty($_POST['email']) && !empty($_POST['senha'])){
     //Permite acessar
     include_once('PDO/pdo.php');
     $email = $_POST['email'];
     $senha = $_POST['senha'];
    

     //print('Email: ' . $email);
     //print('Senha: ' . $senha);

     $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

     $result = $conexao->query($sql);

     //print_r($sql);
     //print_r($result);

     if(mysqli_num_rows($result) < 1){

      unset($_SESSION['email']);
      unset($_SESSION['senha']);
      

      header('Location: login.php');
      
     }
     else{
      $_SESSION['email'] = $email;
      $_SESSION['senha'] = $senha;
      header('Location: home.php');
     }
     
   }
   else{
      
      //Não permite acessar
      header('Location: login.php');
     
   }

?>