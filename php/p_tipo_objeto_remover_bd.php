<?php

$id = $_GET["id"];

include "../conexao/conexao.php";

$conn = conectar();

$sql = "DELETE FROM tipo_objeto WHERE id=$id;";

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