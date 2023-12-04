<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <?php 
            $number = $_GET["number"];
            $ant = $number - 1;
            $suc = $number + 1;

            echo "<p>O número escolhido foi <strong>$number</strong></p>";
            echo "<p>O seu <i>antecessor</i> é $ant</p>";
            echo "<p>O seu <i>sucessor</i> é $suc</p>";
        ?>
        <button>Voltar</button>
    </main>
</body>
</html>