<?php

function conectar()
{
    $servidor = "localhost";
    $usuario = "root";
    $senha ="123 ";
    $banco = "achados_perdidos";

    $conn = new mysqli($servidor, $usuario, $senha, $banco);

    if ($conn->connect_error) {
        die("a conexão falhou!" . $conn->connect_error);
    }

    return $conn;
}

function desconectar($conn){
    $conn->close();
}

?>