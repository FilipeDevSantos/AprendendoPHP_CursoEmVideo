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
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            $value = (float) $_GET["value"];
            $result = $value / 5.22;
            $inDollar = round($result, 2);

            echo "<p>Seus R$ $value equivalem a US$ $inDollar</p>";
            echo "<p>*<strong>Cotação fixa de R$5,22</strong> informada diretamente no código</p>";
            echo "<button onClick=\"javascript:history.go(-1);\" >Voltar</button>";
        ?>
    </section>
</body>
</html>