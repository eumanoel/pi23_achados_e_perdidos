<?php

$id = $_POST["id"];
$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];
$data_encontrado = $_POST["data_encontrado"];
$data_devolvido = $_POST["data_devolvido"];
$tipo_objeto = $_POST["tipo_objeto"];

include "../conexao/conexao.php";

$conn = conectar();

if($data_devolvido == ''){
    $sql = "INSERT INTO objeto (titulo, descricao, data_encontrado, imagem, id_tipo_objeto) 
    VALUES ('$titulo', '$descricao', '$data_encontrado','$nome_imagem', '$tipo_objeto');";
}else{
    $sql = "INSERT INTO objeto (titulo, descricao, data_encontrado, data_devolvido, imagem, id_tipo_objeto) 
    VALUES ('$titulo', '$descricao', '$data_encontrado', '$data_devolvido','$nome_imagem', '$tipo_objeto');";
}

$result = $conn->query($sql);
if($result){
    desconectar($conn);
    header("Location: ../p_objeto.php");
    die();
}else{
    desconectar($conn);
    echo "<p>Problema</p>";
}

?>