<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Idade</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora de Idade</h1>
        <form method="post">
            <div class="form-group">
                <label for="anoNascimento">Digite o ano de nascimento:</label>
                <input type="number" class="form-control" id="anoNascimento" name="anoNascimento" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $anoNascimento = $_POST["anoNascimento"];
            $anoAtual = date("Y");
            $idade = $anoAtual - $anoNascimento;
            $diasVividos = $idade * 365;
            $idade2025 = 2025 - $anoNascimento;
            echo "<p>Sua idade é {$idade} anos.</p>";
            echo "<p>Você viveu aproximadamente {$diasVividos} dias.</p>";
            echo "<p>Em 2025, você terá {$idade2025} anos.</p>";
        }
        ?>
    </div>
</body>
</html>
