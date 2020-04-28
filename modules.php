<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet"> 
    <link rel ="stylesheet" href="assets/css/style.css">
    <link rel ="stylesheet" href="assets/css/modules.css">
    <title>Curso de Python</title>
</head>
<body class="moduless">
    <header class="cabeçalho">
        <h1>Cursos Eng. de Software</h1>
        <h2>Visualização do Curso</h2>
    </header>
    <nav class="navegacao">
        <a href="https://drive.google.com/drive/folders/1uG0YpFkNBugGj23uE_FURfMblXEQ1hG_?usp=sharing" target="blank"
            class="verde">Baixar Curso</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer class="rodape">
        GDA CORPORATION © <?= date('Y'); ?> 
    </footer>
</body>
</html> 