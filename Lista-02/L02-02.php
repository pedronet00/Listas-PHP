<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menor Valor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Menor Valor</h1>
        <form method="post">
            <?php
            $numeros = [];
            for ($i = 1; $i <= 7; $i++) {
                echo "<div class='form-group'>";
                echo "<label for='numero{$i}'>Digite o número {$i}:</label>";
                echo "<input type='number' class='form-control' id='numero{$i}' name='numero{$i}' required>";
                echo "</div>";
            }
            ?>
            <button type="submit" class="btn btn-primary">Encontrar Menor Valor</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            for ($i = 1; $i <= 7; $i++) {
                $numeros[] = $_POST["numero{$i}"];
            }
            $menorValor = min($numeros);
            $posicao = array_search($menorValor, $numeros);
            echo "<p>O menor valor é $menorValor e está na posição $posicao</p>";
        }
        ?>
    </div>
</body>
</html>
