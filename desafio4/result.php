<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas v2.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas v2.0</h1>
        <?php 
            date_default_timezone_set("America/Sao_Paulo");
            $content = file_get_contents("https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='" . date("d/m/Y") . "'&@dataFinalCotacao='" . date("d/m/Y") . "'&\$top=1&\$format=json&\$select=cotacaoCompra");
            $json = json_decode($content, true);

            $dollarExchangeRate = $json["value"][0]["cotacaoCompra"];

            $value = (float) $_GET["value"];
            $result = $value / $dollarExchangeRate;
            $inDollar = round($result, 2);

            echo "<p>Seus R$ $value equivalem a US$ $inDollar</p>";
            echo "<p>*Cotação obtida diretamente do site do <strong>Banco Central do Brasil</strong></p>";
            echo "<button onClick=\"javascript:history.go(-1);\" >Voltar</button>";
        ?>
    </section>
</body>
</html>