<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Resultado do processamento</h1>
    <main>
        <?php
            $n = $_GET["nome"];
            $s = $_GET["sobrenome"];
            echo "<p>É um prazer te conhecer, $n $s! Este é meu site!</p>"
        ?>
    </main>
</body>
</html>