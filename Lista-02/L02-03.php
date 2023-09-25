<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Soma</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Calcular Soma</h1>
        <form method="post">
            <div class="form-group">
                <label for="valor1">Digite o primeiro valor:</label>
                <input type="number" class="form-control" id="valor1" name="valor1" required>
            </div>
            <div class="form-group">
                <label for="valor2">Digite o segundo valor:</label>
                <input type="number" class="form-control" id="valor2" name="valor2" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Soma</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $valor1 = $_POST["valor1"];
            $valor2 = $_POST["valor2"];
            $soma = $valor1 + $valor2;
            if ($valor1 == $valor2) {
                $soma *= 3;
                echo "<p>A soma é igual a 3 vezes $soma</p>";
            } else {
                echo "<p>A soma é $soma</p>";
            }
        }
        ?>
    </div>
</body>
</html>
