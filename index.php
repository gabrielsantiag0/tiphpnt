<?php ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Churrascaria fogo de chão</title>
</head>
<body class="fundofixo">
    <!-- começo do menu  -->
    <?php include 'menu_publico.php'; ?>
    <a name="home">&nbsp;</a>
    <main class="container">
        <!-- inicio carousel -->
        <?php include 'carousel.php'; ?>
        <!-- inicio area de destaque -->
        <a name="destaques">&nbsp;</a>
        <?php include 'produtos_destaque.php'; ?>
        <!-- area geral de produtos -->
        <?php include 'produtos_geral.php'; ?>
        <!-- inicio footer -->
        <footer class="panel footer" style="background: none;" >
        <?php include 'rodape.php'; ?>
        <a name="contato"></a>
    </footer>
    </main>
</body>
</html>