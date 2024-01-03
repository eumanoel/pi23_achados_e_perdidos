<?php

$id = $_GET["id"];

include "../conexao/conexao.php";

$conn = conectar();

$sql2 = "DELETE FROM objeto WHERE id=$id;";
$result = $conn->query($sql2);

if($result){
    desconectar($conn);
    header("Location: ../p_objeto.php");
    die();
}else{
    desconectar($conn);
    echo "<p>Problema</p>";
}

?>