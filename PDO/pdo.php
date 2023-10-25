<?php 

$servidor ="localhost";
$usuario = "root";
$senha = "";
$dbname = "bd_mediquese";

$conexao = mysqli_connect($servidor,$usuario,$senha,$dbname);

/*if(!$conexao){

    die("Houve um erro : " .mysqli_connect_error());
}
else{
    echo "Deu certo";
}
*/

?>