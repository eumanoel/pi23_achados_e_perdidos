<!DOCTYPE html>
<html lang="en">
<head>
    <title>Página De Login</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pi23_achados_e_perdidos/css/login.css">
    <link rel="stylesheet" href="../pi23_achados_e_perdidos/css/menu_2.css">
    <link rel="stylesheet" href="../pi23_achados_e_perdidos/css/rodape_2.css">
</head>
<style>


</style>
<body>
<?php include 'bases/menu_2.php'; ?>

    <section class="area-login">
         
    <div class="login">
                <div>
                   <img src="../pi23_achados_e_perdidos/imagens/coapac.png" alt="coapac">
                </div>

                <form method="post" action="">
                    <input type="text" name="nome" placeholder="Matricula" autofocus>
                    <input type="password" name="senha" placeholder="Senha">

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