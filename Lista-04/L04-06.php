<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Perfeito</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Número Perfeito</h1>
        <form method="post">
            <div class="form-group">
                <label for="numero">Digite um número:</label>
                <input type="number" class="form-control" id="numero" name="numero" required>
            </div>
            <button type="submit" class="btn btn-primary">Verificar Número Perfeito</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["numero"];
            function ehNumeroPerfeito($num) {
                $somaDivisores = 0;
                for ($i = 1; $i < $num; $i++) {
                    if ($num % $i == 0) {
                        $somaDivisores += $i;
                    }
                }
                return $somaDivisores == $num;
            }
            if (ehNumeroPerfeito($numero)) {
                echo "<p>O número $numero é perfeito.</p>";
            } else {
                echo "<p>O número $numero não é perfeito.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
