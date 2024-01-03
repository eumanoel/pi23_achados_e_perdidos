<?php include 'sessao/verificar_autenticado.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pi23_achados_e_perdidos/src/css/perfil.css">
    <link rel="stylesheet" href="../pi23_achados_e_perdidos/src/css/menu_2.css">
    <link rel="stylesheet" href="../pi23_achados_e_perdidos/src/css/rodape_2.css">
    <title>Pagina de Perfil</title>
</head>
<body>
<?php include 'bases/menu_2.php'; ?>   

<section class="catalog" id="catalog"> 
            
                <div class="card-wrapper">
                    <div class="card-item">

                        <div class="car-content">
                            <h3>MEUS DADOS</h3>
                            <a href="pagcompra.html">
                            <button type="button">ENTRAR</button>
                        </a>
                        </div>
                    </div>
                    <div class="card-item">
                        <div class="car-content">
                            <h3> TIPO DE OBJETOS</h3>
                            <a href="p_tipo_objeto.php">
                            <button type="button">ENTRAR</button>
                        </a>
                        </div>
                    </div>
                    <div class="card-item">
                        <div class="car-content">
                            <h3>DESCREVER OBJETOS</h3>
                            <a href="p_objeto.php">
                            <button type="button">ENTRAR</button>
                        </a>
                        </div>
                    </div>
         
         </section>


<?php include 'bases/rodape_2.php'; ?>
</body>
</html>