<?php

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

// Criptografar a senha
$senha_cripto = md5($senha);

//  Conectar o banco de dados
include "../conexao/conexao.php";
$conn = conectar();

// Criar a String de Consulta
$sql = "SELECT * FROM uario
WHERE usuario='$usuario' and
senha ='$senha_cripto';";

// Executar a consulta
$result = $conn->query($sql);

// Verificar se retornou alguma coisa
if($result->num_rows > 0){
    // retornou e pode autenticar
    // retornar nome do usuário
    while($row = $result->fetch_assoc()){
        // Adicionar o nome à sessão
        session_start();
        $_SESSION["usuario"] = $row["nome"];
    }
    desconectar($conn);
    header("Location: ../perfil.php");
    die();
}else{
    // não retornou e não autentica
    desconectar($conn);
    header("Location: ../login.php");
    die();
}



?>