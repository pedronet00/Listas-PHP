<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma dos Divisores</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Soma dos Divisores</h1>
        <form method="post">
            <?php
            $numeros = [];
            for ($i = 1; $i <= 5; $i++) {
                echo "<div class='form-group'>";
                echo "<label for='numero{$i}'>Digite o número {$i}:</label>";
                echo "<input type='number' class='form-control' id='numero{$i}' name='numero{$i}' required>";
                echo "</div>";
            }
            ?>
            <button type="submit" class="btn btn-primary">Calcular Soma dos Divisores</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            for ($i = 1; $i <= 5; $i++) {
                $numeros[] = $_POST["numero{$i}"];
            }
            function somaDivisores($numero) {
                $soma = 0;
                for ($i = 1; $i < $numero; $i++) {
                    if ($numero % $i == 0) {
                        $soma += $i;
                    }
                }
                return $soma;
            }
            echo "<h2>Soma dos divisores de cada número:</h2>";
            foreach ($numeros as $numero) {
                $soma = somaDivisores($numero);
                echo "<p>Divisores de $numero: $soma</p>";
            }
        }
        ?>
    </div>
</body>
</html>
