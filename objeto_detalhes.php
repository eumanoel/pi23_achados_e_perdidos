<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/perfil.css">
    <link rel="stylesheet" href="src/css/menu_2.css">
    <link rel="stylesheet" href="src/css/rodape_2.css">
    <link rel="stylesheet" href="src/css/objetos.css">
    <title>Document</title>
</head>
<body>
     <!-- INCLUINDO CÓDIGO DE MENU COMUM A TODAS AS PÁGINAS -->
  <?php include 'bases/menu_2.php'; ?>


    <div class="">
    <table class="detalhes">
<?php
    
      $id = $_GET["id"];

      include "conexao/conexao.php";
      $conn = conectar();
      $sql = "SELECT * FROM objeto WHERE id=$id";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td colspan='2'><img class='img-fluid rounded' src='src/media/".$row["imagem"]."' alt='' margin'auto'></td>";
            echo "</tr>";

        echo "<tr>";
        echo "<td><a class='text-justify'>Objeto:</td><td>".$row["titulo"]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><a class='text-justify'>Descrição: </td><td>".$row["descricao"]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><a class='text-justify'>Data encontrado: </td><td>".date('d/m/Y', strtotime($row["data_encontrado"]))."</td>";
        echo "</tr>";
          
        $sql2 = "SELECT * FROM tipo_objeto WHERE id=".$row["id"];
        $result2 = $conn->query($sql2);
        if ($result2->num_rows > 0) {
            while($row2 = $result2->fetch_assoc()) {
                 echo $row2["nome"];
            }
        }
        echo "</p>";

         

        // Listar aqui os públicos
          

        }
    } else {
        echo "<td>Nenhum núcleo cadastrado</td><td></td><td></td>";
    }

    desconectar($conn);

?>
</table>
</div>
    

 <!-- INCLUINDO CÓDIGO DE RODAPÉ COMUM A TODAS AS PÁGINAS -->
 <?php include 'bases/rodape_2.php'; ?>
</body>
</html>