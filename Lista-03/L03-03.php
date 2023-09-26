<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicação de Valores</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Multiplicação de Valores</h1>
        <form method="post">
            <?php
            $valores = [];
            for ($i = 1; $i <= 10; $i++) {
                echo "<div class='form-group'>";
                echo "<label for='valor{$i}'>Digite o valor {$i}:</label>";
                echo "<input type='number' class='form-control' id='valor{$i}' name='valor{$i}' step='0.01' required>";
                echo "</div>";
            }
            ?>
            <div class="form-group">
                <label for="multiplicador">Digite o número para multiplicação:</label>
                <input type="number" class="form-control" id="multiplicador" name="multiplicador" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Multiplicação</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $multiplicador = $_POST["multiplicador"];

            echo "<h2>Resultados:</h2>";
            echo "<p>Valores multiplicados pelo número $multiplicador:</p>";
            echo "<ul>";

            for ($i = 1; $i <= 10; $i++) {
                $valor = $_POST["valor{$i}"];
                $resultado = $valor * $multiplicador;
                echo "<li>Valor $i: $resultado</li>";
            }

            echo "</ul>";
        }
        ?>
    </div>
</body>
</html>
