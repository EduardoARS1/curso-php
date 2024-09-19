<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Processamento</title>
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
        $nome = $$_GET["nome"];
        $sobrenome = $_GET["sobrenome"];
        echo "Olá, seja bem vindo ao meu site $nome $sobrenome!";

        ?>
    </main>
</body>
</html>