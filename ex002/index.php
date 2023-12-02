<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Exibindo data e hora:</h1>
        <?php 
            date_default_timezone_set("America/Sao_Paulo");
            $data = date("d/m/Y");

            echo "<p>A data atual é $data<p>";
            echo "<p>E são " . date("G:i:s") . "<p>";
        ?>
    </body>
</html>