<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado do Processamento</title>
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
        $nome = $_GET["nome"]; //é possível usar $_REQUEST no lugar de $_GET ou $_POST se prefereir, porém, $_REQUEST usa mais memoria, e se for usar o $_POST deve usar esse mesmo termo no "method" do formulário no html
        $sobrenome = $_GET["sobrenome"] ?? "sem sobrenome"; // o sinal de ?? é chamado de operador de coalicencia nula, ele serve para, caso não seja digitado nada ele exibe o que foi colocado entre as aspas na sequencia, ou seja "sem sobrenome"
        echo "<p>Olá, <strong>$nome $sobrenome</strong>! Seja bem vindo ao seu site!</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar a página anterior</a></p>
        <!-- o link de "javascript:history.go(-1)" é uma forma de inserir um voltar para a pagina anterior -->
    </main>
</body>
</html>