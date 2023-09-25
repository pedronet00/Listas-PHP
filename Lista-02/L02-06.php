<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem Crescente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Ordem Crescente</h1>
        <form method="post">
            <div class="form-group">
                <label for="valorA">Digite o valor A:</label>
                <input type="number" class="form-control" id="valorA" name="valorA" required>
            </div>
            <div class="form-group">
                <label for="valorB">Digite o valor B:</label>
                <input type="number" class="form-control" id="valorB" name="valorB" required>
            </div>
            <button type="submit" class="btn btn-primary">Ordenar</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $valorA = $_POST["valorA"];
            $valorB = $_POST["valorB"];
            if ($valorA < $valorB) {
                echo "<p>{$valorA} {$valorB}</p>";
            } elseif ($valorA > $valorB) {
                echo "<p>{$valorB} {$valorA}</p>";
            } else {
                echo "<p>Números iguais: $valorA</p>";
            }
        }
        ?>
    </div>
</body>
</html>
