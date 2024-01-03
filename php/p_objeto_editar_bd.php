<?php

$id = $_POST["id"];
$titulo = $_POST["titulo"];

include "../conexao/conexao.php";

$conn = conectar();

$sql = "UPDATE objeto SET titulo='$titulo' WHERE id=$id;";

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