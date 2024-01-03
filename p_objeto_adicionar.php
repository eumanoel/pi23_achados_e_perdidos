<?php include 'sessao/verificar_autenticado.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pi23_achados_e_perdidos/src/css/perfil.css">
    <link rel="stylesheet" href="../pi23_achados_e_perdidos/src/css/menu_2.css">
    <link rel="stylesheet" href="../pi23_achados_e_perdidos/src/css/rodape_2.css">
    <title>Document</title>
</head>
<body>
<?php include 'bases/menu_2.php'; ?>

<div class="container">

<div class="row mt-5 mb-5">
<div class="col-lg-6">
 <h2>Cadastro de Objetos</h2>
 <form action="php/p_objeto_adicionar_bd.php" method="post" enctype="multipart/form-data">

<p>
   <label for="nome">Titulo:</label>
   <input type="text" name="titulo" id="titulo">
</p>

<p>
   <label for="sigla">Descrição:</label>
   <input type="text" name="descricao" id="descricao">
</p>

<p>
   <label for="data_criacao">Data encontrado:</label>
   <input type="date" name="data_encontrado" id="data_encontrado">
</p>

<p>
   <label for="data_criacao">Data devolvido:</label>
   <input type="date" name="data_devolvido" id="data_devolvido">
</p>

<p>
   <label for="imagem">Imagem:</label>
   <input type="file" name="imagem" id="imagem">
</p>

<p>
  Selecione uma área:<br />
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
      echo "Nenhuma área cadastrada";
      }
  ?>
</p>





<p><input type="submit" value="Cadastrar"></p>
</form>
</div>

</div>
</div>

 <?php include 'bases/rodape_2.php'; ?>
</body>
</html>