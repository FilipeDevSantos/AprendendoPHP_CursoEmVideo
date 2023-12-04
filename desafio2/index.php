<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php 
            $number = random_int(0, 100);

            echo "<p>O valor gerado foi <strong>$number</strong><p>";
            echo "<button onClick=\"window.location.reload();\" > \u{2699} Gerar outro</button>";
        ?>
    </section>
</body>
</html>