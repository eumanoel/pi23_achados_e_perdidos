<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/index.css">
    <title>Pagina Principal</title>
</head>
<body>
<header>
                    <?php include 'bases/menu.php'; ?>
                    <div class="text">
                        <h2>ACHADOS E PERDIDOS</h2>
                        <p>Esse site tem a finalidade de organizar para os servidores da coapac os itens do achados e perdidos.</p>
                        
                    </div>
                    <img src="imagens/coapac.png" alt="coapac">
                </div>
            </div>
        </header>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h2>Últimos Objetos</h2>

<div class="row">

<?php
    include "conexao/conexao.php";
    $conn = conectar();
    $sql = "SELECT * FROM objeto";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<div class='col-lg-4 col-sm-6 portfolio-item'>";
        echo "<div class='card h-100'>";
        echo "<a href='p_objeto.php'".$row["id"]."'>";
        echo "<img class='card-img-top' src='src/media/".$row["imagem"]."' alt='' style='width:10em'>";
        echo "</a>";
        echo "<div class='card-body'>";
        echo "<h4 class='card-title'>";
        echo "<a href='objeto_detalhes.php?id=".$row["id"]."'>".$row["titulo"]."</a>";
        echo "</h4>";
        echo "<p class='card-text text-uppercase'>".$row["descricao"]."</p>";
        echo "</h4></div></div></div>";
    
      }
    } else {
      echo "<td>Nenhum objeto cadastrado</td><td></td><td></td>";
    }

    desconectar($conn);

?>

        <?php include 'bases/rodape.php'; ?> 
</body>
</html>