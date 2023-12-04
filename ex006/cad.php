<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
            /*
            $_GET -> Contém os dados enviados por um formulário de metódo GET
            $_POST -> Contém os dados enviados por um formulário de metódo POST
            $_COOCKIE -> Contém os dados que estão armazenaados no Coockies
            $_REQUEST -> Contém os dados de todas as variáveis globais acima

            Operador de coalescência nula "??" serve como uma alternativa caso não consiga obter o valor em prioridade
            */

            $firstName = $_GET["firstName"] ?? "Pessoa";
            $lastName = $_GET["lastName"] ?? "Desconhecida";

            echo "<p>É um prazer te conhecer, <strong>$firstName $lastName!</strong> Este é o meu site!</p>";
        ?>

        <p><a href="javascript:history.go(-1)">Voltar para a página anterior.</a></p>
    </main>
</body>
</html>