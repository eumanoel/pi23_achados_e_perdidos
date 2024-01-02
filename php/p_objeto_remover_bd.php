<?php

$codigo = $_GET["codigo"];

include "../conexao/conexao.php";

$conn = conectar();

/* 
Antes de remover o núcleo, é preciso remover todas as instâncias
da tabela nucleo_publico, já que lá tem as referências de quais 
públicos ela se relaciona (dependência).
*/

$sql = "DELETE FROM tipo_objeto WHERE nucleo_codigo=$codigo;";
$result = $conn->query($sql);

if($result){
    // Agora remover o bucleo, pois não tem mais dependência no banco
    $sql2 = "DELETE FROM objeto WHERE codigo=$codigo;";
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