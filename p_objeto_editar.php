<?php include 'sessao/verificar_autenticado.php'; ?>

<?php

$id = isset($_GET["id"]) ? $_GET["id"] : null;

if ($id === null) {
    // Lidar com a situação em que 'id' não está definido, por exemplo, redirecionar para uma página de erro.
    exit("ID não definido");
}

include "conexao/conexao.php";

$conn = conectar();

$sql = "SELECT * FROM objeto where id=$id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $nome_area = $row["titulo"];
  }
} else {
  echo "<td>Nenhuma área cadastrada</td><td></td><td></td>";
}

desconectar($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pi23_achados_e_perdidos/src/css/perfil.css">
    <link rel="stylesheet" href="../pi23_achados_e_perdidos/src/css/menu_2.css">
    <link rel="stylesheet" href="../pi23_achados_e_perdidos/src/css/rodape_2.css">
    <link rel="stylesheet" href="../pi23_achados_e_perdidos/src/css/objetos.css">
    <title>Document</title>
</head>
<body>

<?php include 'bases/menu_2.php'; ?>
<div>
   <table class="objetos">

<tr>
 <td colspan="2"><h2>Editar Objetos</h2></td>
 <form action="php/p_objeto_editar_bd.php" method="post" enctype="multipart/form-data">
</tr>
<tr>
<p>
   <td><label for="nome">Titulo:</label></td>
   <td><input type="text" name="titulo" id="titulo"></td>
</p>
</tr>
<tr>
<p>
<td><label for="sigla">Descrição:</label></td>
<td><input type="text" name="descricao" id="descricao"></td>
</p>
</tr>
<tr>
<p>
<td><label for="data_criacao">Data encontrado:</label></td>
<td><input type="date" name="data_encontrado" id="data_encontrado"></td>
</p>
</tr>
<tr>
<p>
<td><label for="data_criacao">Data devolvido:</label></td>
<td><input type="date" name="data_devolvido" id="data_devolvido"></td>
</p>
</tr>
<tr>
<p>
<td><label for="imagem">Imagem:</label></td>
<td><input type="file" name="imagem" id="imagem"></td>
</p>
</tr>
<tr>
<p>
<td colspan="2">Selecione um objeto:<br />
  <?php
      
      $conn = conectar();
      $sql = "SELECT * FROM tipo_objeto";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          echo "<input type='radio' name='tipo_objeto' value='".$row["id"]."' /> ".$row["nome"]."<br />";
      }
      } else {
      echo "Nenhuma área cadastrada";
      }
  ?>
  </td>
</p>




<tr>
<p><td colspan="2"><input type="submit" value="Editar"></td></p>
   </tr>
</form>
   </table>

</div>



 <?php include 'bases/rodape_2.php'; ?>
</body>
</html>