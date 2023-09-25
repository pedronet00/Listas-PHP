<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tinta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora de Tinta</h1>
        <form method="post">
            <div class="form-group">
                <label for="area">Digite a área a ser pintada (em metros quadrados):</label>
                <input type="number" class="form-control" id="area" name="area" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $area = $_POST["area"];
            $litrosDeTinta = $area / 3;
            $latasDeTinta = ceil($litrosDeTinta / 18);
            $precoTotal = $latasDeTinta * 80;
            echo "<p>Você precisará de {$latasDeTinta} latas de tinta.</p>";
            echo "<p>O preço total será de R$ {$precoTotal}</p>";
        }
        ?>
    </div>
</body>
</html>
