<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise de Números</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Análise de Números</h1>
        <form method="post">
            <?php
            $numeros = [];
            for ($i = 1; $i <= 10; $i++) {
                echo "<div class='form-group'>";
                echo "<label for='numero{$i}'>Digite o número {$i}:</label>";
                echo "<input type='number' class='form-control' id='numero{$i}' name='numero{$i}' required>";
                echo "</div>";
            }
            ?>
            <button type="submit" class="btn btn-primary">Analisar Números</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $negativos = 0;
            $positivos = 0;
            $pares = 0;
            $impares = 0;

            for ($i = 1; $i <= 10; $i++) {
                $numero = $_POST["numero{$i}"];

                if ($numero < 0) {
                    $negativos++;
                } elseif ($numero > 0) {
                    $positivos++;
                }

                if ($numero % 2 == 0) {
                    $pares++;
                } else {
                    $impares++;
                }
            }

            echo "<h2>Resultados:</h2>";
            echo "<p>Números negativos: $negativos</p>";
            echo "<p>Números positivos: $positivos</p>";
            echo "<p>Números pares: $pares</p>";
            echo "<p>Números ímpares: $impares</p>";
        }
        ?>
    </div>
</body>
</html>
