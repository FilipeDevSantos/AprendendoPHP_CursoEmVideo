<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entendendo Strings no PHP</title>
</head>
<body>
    <h1>String interpretada e não interpretada:</h1>
    <?php 
        $fullName = "Filipe Santos";
        $devName = "FilipeDevSantos \u{1F609}";
        const ESTADO = "PROGRAMANDO";

        # Com intepretação de String
        echo "<p>Olá $fullName, seu nome de dev é $devName.</p>";
        # Sem interpretação de String
        echo '<p>Olá $fullName, seu nome de dev é $devName.</p>';
        # Única forma de concatenar uma constante independende de ser ou não intepretada
        echo "<p>O seu estado atual é " . ESTADO . "</p>";
    ?>
</body>
</html>