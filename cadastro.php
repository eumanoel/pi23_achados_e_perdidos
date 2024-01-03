<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="../pi23_achados_e_perdidos/src/css/menu_2.css">
    <link rel="stylesheet" href="../pi23_achados_e_perdidos/src/css/rodape_2.css">
    <title>Pagina de Cadastro</title>
</head>
<body>
                <?php include 'bases/menu_2.php'; ?>

        <section class="area-login">
            <div class="login">
                <div>
                    <img src="../pi23_achados_e_perdidos/imagens/coapac.png" alt="login" >
                </div>
                <form method="post" action="php/cadastro_bd.php">
                    <input type="text" name="nome" id="nome" placeholder="Nome de usuário" autofocus>
                    <input type="text" name="usuario" id="usuario" placeholder="Usuário">
                    <input type="password" name="senha" id="senha" placeholder="Senha">

                    <div class="botoes">
                    <input type="submit" value="Cadastrar-se">
                    </div>
                </form>
            </div>
        </section>
        <br>  
                    <?php include 'bases/rodape_2.php'; ?>
</body>
</html