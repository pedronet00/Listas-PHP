<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menor Número</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Menor Número</h1>
        <form method="post">
            <div class="form-group">
                <label for="numero1">Digite o primeiro número:</label>
                <input type="number" class="form-control" id="numero1" name="numero1" required>
            </div>
            <div class="form-group">
                <label for="numero2">Digite o segundo número:</label>
                <input type="number" class="form-control" id="numero2" name="numero2" required>
            </div>
            <button type="submit" class="btn btn-primary">Encontrar Menor Número</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero1 = $_POST["numero1"];
            $numero2 = $_POST["numero2"];
            function encontrarMenor($a, $b) {
                return ($a < $b) ? $a : $b;
            }
            $menor = encontrarMenor($numero1, $numero2);
            echo "<p>O menor número é $menor</p>";
        }
        ?>
    </div>
</body>
</html>
