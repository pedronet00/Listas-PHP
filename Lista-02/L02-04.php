<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Tabuada</h1>
        <form method="post">
            <div class="form-group">
                <label for="numero">Digite um número:</label>
                <input type="number" class="form-control" id="numero" name="numero" required>
            </div>
            <button type="submit" class="btn btn-primary">Exibir Tabuada</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["numero"];
            echo "<h2>Tabuada de $numero:</h2>";
            for ($i = 0; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<p>{$numero} X {$i} = {$resultado}</p>";
            }
        }
        ?>
    </div>
</body>
</html>
