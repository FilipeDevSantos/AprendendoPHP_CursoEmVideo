<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas v1.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Analisador de Número Real</h1>
        <?php 
            $value = $_GET["value"];
            $dividedNumber = explode(".", $value);

            echo "<p>Analisando o número <strong>" . number_format($value, 3, ",", ".") . "</strong> informado pelo usuário:</p>";
            echo "<ul>";
            echo "<li>A parte inteira do número é <strong>" . $dividedNumber[0], 0, ",", "." . "</strong></li>";
            echo "<li>A parte fracionária do número é <strong>0," . $dividedNumber[1] . "</strong></li>";
            echo "</ul>";
            echo "<button onClick=\"javascript:history.go(-1);\" >Voltar</button>";
        ?>
    </section>
</body>
</html>