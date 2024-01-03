<?php include 'sessao/verificar_autenticado.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
 <form action="php/p_tipo_objeto_adicionar_bd.php" method="post">
<p>
   <label for="nome">Nome:</label>
   <input type="text" name="nome" id="nome">
</p>
<p><input type="submit" value="Cadastrar"></p>
</form>
</div>
</div>
</div>
</div>

 <?php include 'bases/rodape_2.php'; ?>
</body>
</html>