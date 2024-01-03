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
<?php include 'bases/menu_2.php'; ?>

<div>
   <table class="objetos" >
      <tr>
   <td colspan="2"><h2>Cadastro de Objetos</h2></td>
 <form action="php/p_objeto_adicionar_bd.php" method="post" enctype="multipart/form-data">
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
      <tr>
<p>
<td colspan="2">Selecione um objeto:<br />
  <?php
      include "conexao/conexao.php";
      $conn = conectar();
      $sql = "SELECT * FROM tipo_objeto";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          echo "<input type='radio' name='tipo_objeto' value='".$row["id"]."' /> ".$row["nome"]."<br />";
      }
      } else {
      echo "Nenhum objeto cadastrado";
      }
  ?>
  </td>
</p>
      </tr>




<p><td colspan="2"><input type="submit" value="Cadastrar"></td></p>
</form>
   </table>
</div>


 <?php include 'bases/rodape_2.php'; ?>
</body>
</html>