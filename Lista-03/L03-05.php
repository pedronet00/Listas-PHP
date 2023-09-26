<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Primos do Vetor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Números Primos do Vetor</h1>
        <form method="post">
            <?php
            $numeros = [];
            for ($i = 1; $i <= 20; $i++) {
                echo "<div class='form-group'>";
                echo "<label for='numero{$i}'>Digite o número {$i}:</label>";
                echo "<input type='number' class='form-control' id='numero{$i}' name='numero{$i}' required>";
                echo "</div>";
            }
            ?>
            <button type="submit" class="btn btn-primary">Buscar Números Primos</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            function ehPrimo($numero) {
                if ($numero <= 1) {
                    return false;
                }
                for ($i = 2; $i <= sqrt($numero); $i++) {
                    if ($numero % $i == 0) {
                        return false;
                    }
                }
                return true;
            }

            echo "<h2>Números Primos do Vetor:</h2>";
            echo "<ul>";

            for ($i = 1; $i <= 20; $i++) {
                $numero = $_POST["numero{$i}"];
                if (ehPrimo($numero)) {
                    echo "<li>Número {$i}: $numero</li>";
                }
            }

            echo "</ul>";
        }
        ?>
    </div>
</body>
</html>
