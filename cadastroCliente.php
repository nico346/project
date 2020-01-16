<?php


include("connection.php");


if(isset($_POST['cadastrar'])){ 

$nome = $_POST['nome']; 
$email = $_POST['email'];
$CPF = $_POST['cpf'];
$nascimento = $_POST['nascimento'];
$destino = $_POST['destino'];
$partida = $_POST['partida'];
$dtPartida = $_POST['dtPartida'];
$dtChegada = $_POST['dtChegada'];

$query = "insert into addcliente (nome, email, cpf, nascimento, destino, partida, dtPartida, dtChegada) 
values( '$nome','$email','$CPF','$nascimento','$destino','$partida',
'$dtPartida','$dtChegada')";

if(mysqli_query($conn, $query)){ 
    echo "cadastro efetuado com successo! ";
}else{ 
    echo "Falha ao cadastrar.";
    header("refresh:2 ;url= formCadCliente.php");
}

}

?>
