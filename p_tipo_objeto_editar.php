<?php include 'sessao/verificar_autenticado.php'; ?>

<?php

$id = $_GET["id"];

include "conexao/conexao.php";

$conn = conectar();

$sql = "SELECT * FROM tipo_objeto where id=$id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $nome_area = $row["nome"];
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pi23_achados_e_perdidos/src/css/perfil.css">
    <link rel="stylesheet" href="../pi23_achados_e_perdidos/src/css/menu_2.css">
    <link rel="stylesheet" href="../pi23_achados_e_perdidos/src/css/rodape_2.css">
    <link rel="stylesheet" href="../pi23_achados_e_perdidos/src/css/objetos.css">
    <title>Document</title>
</head>
<body>
<?php include 'bases/menu_2.php'; ?>

<div class="container">
<table class="objetos">
  <tr>
 <td colspan="2"><h2>Edição de Área</h2></td>
 <form action="php/p_tipo_objeto_editar_bd.php" method="post">
</tr>
<p>
  <tr>
   <td><label for="nome">Nome:</label></td>
   <td><input type="text" name="nome" id="nome" value="<?php echo $nome_area; ?>" /></td>
  </tr>
  </p>

<input type="hidden" name="id" value="<?php echo $id; ?>" />
<tr>
<p><td colspan="2"><input type="submit" value="Cadastrar"></td></p>
</tr>
</form>
</table>
</div>
<div class="col-lg-6">
 <img class="img-fluid rounded" src="src/img/campus.jpg" alt="">
</div>

 <?php include 'bases/rodape_2.php'; ?>
</body>
</html>