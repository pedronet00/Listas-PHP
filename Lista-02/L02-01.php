<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Número</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Verificar Número</h1>
        <form method="post">
            <div class="form-group">
                <label for="numero">Digite um número:</label>
                <input type="number" class="form-control" id="numero" name="numero" required>
            </div>
            <button type="submit" class="btn btn-primary">Verificar</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["numero"];
            if ($numero > 0) {
                echo "<p>Valor Positivo</p>";
            } elseif ($numero < 0) {
                echo "<p>Valor Negativo</p>";
            } else {
                echo "<p>Igual a Zero</p>";
            }
        }
        ?>
    </div>
</body>
</html>
