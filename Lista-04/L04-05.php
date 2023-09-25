<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora de IMC</h1>
        <form method="post">
            <div class="form-group">
                <label for="peso">Digite o peso (em kg):</label>
                <input type="number" class="form-control" id="peso" name="peso" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="altura">Digite a altura (em metros):</label>
                <input type="number" class="form-control" id="altura" name="altura" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular IMC</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $peso = $_POST["peso"];
            $altura = $_POST["altura"];
            $imc = $peso / ($altura * $altura);
            echo "<p>Seu IMC é: {$imc}</p>";
            if ($imc < 18.5) {
                echo "<p>Você está abaixo do peso.</p>";
            } elseif ($imc >= 18.5 && $imc < 24.9) {
                echo "<p>Seu peso está dentro da faixa normal.</p>";
            } elseif ($imc >= 24.9 && $imc < 29.9) {
                echo "<p>Você está com sobrepeso.</p>";
            } else {
                echo "<p>Você está obeso.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
