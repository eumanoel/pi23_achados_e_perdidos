<?php include 'sessao/verificar_autenticado.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- INCLUINDO CÓDIGO DE MENU COMUM A TODAS AS PÁGINAS -->
  <?php include 'bases/menu_2.php'; ?>


<div class="container">

<div class="row mt-5 mb-5">
<div class="col-lg-6">
 <h2>Núcleos</h2>
<p><a href="p_objeto_adicionar.php">Adicionar</a></p>

 <table class="table table-striped">
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
  echo "<td><a href='p_objeto_editar.php?codigo=".$row["codigo"]."'>EDITAR</td>";
  echo "<td><a href='php/p_objeto_remover_bd.php?codigo=".$row["codigo"]."'>REMOVER</td>";
  echo "</tr>";
}
} else {
echo "<td>Nenhum núcleo cadastrado</td><td></td><td></td>";
}

desconectar($conn);

?>
  
</tbody>

</table>


</div>
<div class="col-lg-6">
 <img class="img-fluid rounded" src="src/img/campus.jpg" alt="">
</div>
</div>
</div>

</div>


 <!-- INCLUINDO CÓDIGO DE RODAPÉ COMUM A TODAS AS PÁGINAS -->
 <?php include 'bases/rodape_2.php'; ?>
</body>
</html>