<?php include 'sessao/verificar_autenticado.php'; ?>

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


<div class="tabela">

 <h2>Objetos</h2>
<p><a href="p_objeto_adicionar.php">Adicionar</a></p>

 <table>
 <thead>
  <tr>
    <th scope="col">Logo</th>
    <th scope="col">Nome</th>
    <th scope="col">Editar</th>
    <th scope="col">Remover</th>
  </tr>
</thead>
<tbody>

<?php

include "conexao/conexao.php";

$conn = conectar();

$sql = "SELECT * FROM objeto";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
  echo "<tr>";
  echo "<td><img class='img-fluid rounded' src='src/media/".$row["imagem"]."' width='50px' alt=''></td>";  

  echo "<td scope='row'>".$row["titulo"]."</td>";
  echo "<td><a href='p_objeto_editar.php?id=".$row["id"]."'>EDITAR</td>";
  echo "<td><a href='php/p_objeto_remover_bd.php?id=".$row["id"]."'>REMOVER</td>";
  echo "</tr>";
}
} else {
echo "<td>Nenhum objeto cadastrado</td><td></td><td></td>";
}

desconectar($conn);

?>
  
</tbody>

</table>


</div>



 <!-- INCLUINDO CÓDIGO DE RODAPÉ COMUM A TODAS AS PÁGINAS -->
 <?php include 'bases/rodape_2.php'; ?>
</body>
</html>