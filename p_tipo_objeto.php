<?php include 'sessao/verificar_autenticado.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pi23_achados_e_perdidos/src/css/perfil.css">
    <link rel="stylesheet" href="../pi23_achados_e_perdidos/src/css/menu_2.css">
    <link rel="stylesheet" href="../pi23_achados_e_perdidos/src/css/rodape_2.css">
    <link rel="stylesheet" href="../pi23_achados_e_perdidos/src/css/objetos.css">
    <title>Document</title>
</head>
<body>
<?php include 'bases/menu_2.php'; ?>
<table>

<div class="tabela">
 <h2>Tipos de objetos</h2>
<p><a href="p_tipo_objeto_adicionar.php">Adicionar</a></p>

 <table class="the">
 <thead>
  <tr>
    <th scope="col">Nome</th>
    <th scope="col">Editar</th>
    <th scope="col">Remover</th>
  </tr>
</thead>

<tbody>

<?php

include "conexao/conexao.php";

$conn = conectar();

$sql = "SELECT * FROM tipo_objeto";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
  echo "<tr>";
  echo "<td scope='row'>".$row["nome"]."</td>";
  echo "<td><a href='p_tipo_objeto_editar.php?id=".$row["id"]."'>EDITAR</td>";
  echo "<td><a href='php/p_tipo_objeto_remover_bd.php?id=".$row["id"]."'>REMOVER</td>";
  echo "</tr>";
}
} else {
echo "<td>Nenhuma área cadastrada</td><td></td><td></td>";
}

desconectar($conn);

?>
  
</tbody>

</table>
</table>
</div>




 <?php include 'bases/rodape_2.php'; ?>  
</body>
</html>