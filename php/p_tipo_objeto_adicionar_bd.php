<?php

$nome = $_POST["nome"];

include "../conexao/conexao.php";

$conn = conectar();

$sql = "INSERT INTO tipo_objeto (nome) VALUES ('$nome');";

$result = $conn->query($sql);
if($result){
    desconectar($conn);
    header("Location: ../p_tipo_objeto.php");
    die();
}else{
    desconectar($conn);
    echo "<p>Problema</p>";
}

?>