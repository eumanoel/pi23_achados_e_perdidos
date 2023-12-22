<?php

$nome = $_POST["nome"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$senha_cripto = md5($senha);

include "../conexao/conexao.php";
$conn = conectar();


$sql = "INSERT INTO usuario
(nome, usuario, senha) VALUES
('$nome', '$usuario', '$senha_cripto');";


$result = $conn->query($sql);


if($result){

    desconectar($conn);
    
    header("Location: ../login.php");
    die();
}else{
    
    desconectar($conn);
    echo "<p>Deu errado</p>";
}



?>