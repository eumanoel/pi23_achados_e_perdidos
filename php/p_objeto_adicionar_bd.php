<?php

//Receber dados do formulário
$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];
$data_encontrado = $_POST["data_encontrado"];
$data_devolvido = $_POST["data_devolvido"];
$tipo_objeto = $_POST["tipo_objeto"];


//Fazer o upload da imagem para a pasta media, dentro de src e salvar o nome dela em uma variável
$nome_imagem = $_FILES['imagem']['name'];
//$tmp = explode('.',$nome_arquivo);
//$extensaoResumo = strtolower(end($tmp));
//$extensaoResumo = strtolower(end(explode('.',$nomeResumo)));
//$caminhoresumo = "artigos/submissoes/artigo_$num_artigo"."."."$extensaoResumo";
move_uploaded_file($_FILES['imagem']['tmp_name'], ("../media/$nome_imagem"));

include "../conexao/conexao.php";

$conn = conectar();

$sql = "INSERT INTO objeto (titulo, descricao, data_encontrado, data_devolvido, imagem, id_tipo_objeto) 
VALUES ('$titulo', '$descricao', '$data_encontrado', '$data_devolvido','$nome_imagem', '$tipo_objeto');";

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