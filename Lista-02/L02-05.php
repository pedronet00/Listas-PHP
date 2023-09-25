<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Fatorial</h1>
        <form method="post">
            <div class="form-group">
                <label for="numero">Digite um número:</label>
                <input type="number" class="form-control" id="numero" name="numero" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Fatorial</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["numero"];
            $fatorial = 1;
            for ($i = $numero; $i >= 1; $i--) {
                $fatorial *= $i;
            }
            echo "<p>O fatorial de $numero é $fatorial</p>";
        }
        ?>
    </div>
</body>
</html>
