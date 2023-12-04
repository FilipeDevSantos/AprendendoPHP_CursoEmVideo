<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        /*
        0x -> Hexadecimal
        0b -> Binário
        0  -> Octal

        var_dump($variable) -> obter informações da variável como o tipo e o tamanho
        */

        $hex = 0x2A;
        $bin = 0b1001;
        $oct = 012;

        echo "<p>O número $hex é a representação do Hexadecimal 0x2A</p>";
        echo "<p>O número $bin é a representação do Binário 0b1001</p>";
        echo "<p>O número $oct é a representação do Octal 012</p>";

        echo var_dump($hex);
    ?>
</body>
</html>