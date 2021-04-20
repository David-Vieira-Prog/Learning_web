<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;400;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href='assets/css/style.css'>
    <link rel="stylesheet" href='assets/css/exercicio.css'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios</title>
</head>

<body class='exercicio'>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Vizualização dos Exercícios</h2>
    </header>
    <nav class="navegacao">
        <a href="index.php"> <-----</a>
             <a href="basic/hello.php" class="cor">Sem formatação
        </a>

    </nav>
    <main class="principal">
        <div class="conteudo">
        <?php
        include('basic/hello.php');
        ?>

        </div>
    </main>
    <footer class="rodape">Desenvolvido por David Vieira | <?= date('Y'); ?> </footer>

</body>

</html>