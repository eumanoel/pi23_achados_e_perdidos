<!DOCTYPE html>
<html lang="en">
<head>
    <title>Página De Login</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/login.css">
    <link rel="stylesheet" href="src/css/menu_2.css">
    <link rel="stylesheet" href="src/css/rodape_2.css">
</head>
<style>


</style>
<body>
<?php include 'bases/menu_2.php'; ?>

    <section class="area-login">
         
    <div class="login">
                <div>
                   <img src="imagens/coapac.png" alt="coapac">
                </div>

                <form method="post" action="php/autenticacao.php">
                    <input type="text" name="usuario" id="usuario "placeholder="Usuario" autofocus>
                    <input type="password" name="senha" id="senha" placeholder="Senha">

                    <div class="botoes">
                    <input type="submit" value="Login">
                    </div>
                </form>
                
            </div>
    </section>
<br>
    <?php include 'bases/rodape_2.php'; ?>
</body>
</html>