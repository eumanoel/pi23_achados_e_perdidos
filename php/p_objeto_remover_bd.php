<?php

$codigo = $_GET["id"];

include "../conexao/conexao.php";

$conn = conectar();




if($result){
    // Agora remover o bucleo, pois não tem mais dependência no banco
    $sql2 = "DELETE FROM objeto WHERE id=$id;";
    $result2 = $conn->query($sql2);
    if($result2){
        desconectar($conn);
        header("Location: ../p_objeto.php");
        die();
    }
}else{
    desconectar($conn);
    echo "<p>Problema</p>";
}

?>