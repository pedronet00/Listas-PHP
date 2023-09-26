<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mês Correspondente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Mês Correspondente</h1>
        <form method="post">
            <div class="form-group">
                <label for="numero_mes">Digite o número do mês (1 a 12):</label>
                <input type="number" class="form-control" id="numero_mes" name="numero_mes" min="1" max="12" required>
            </div>
            <button type="submit" class="btn btn-primary">Buscar Mês</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero_mes = $_POST["numero_mes"];
            $meses = [
                1 => "Janeiro",
                2 => "Fevereiro",
                3 => "Março",
                4 => "Abril",
                5 => "Maio",
                6 => "Junho",
                7 => "Julho",
                8 => "Agosto",
                9 => "Setembro",
                10 => "Outubro",
                11 => "Novembro",
                12 => "Dezembro"
            ];

            if (isset($meses[$numero_mes])) {
                $nome_mes = $meses[$numero_mes];
                echo "<p>O número $numero_mes corresponde ao mês de $nome_mes.</p>";
            } else {
                echo "<p>Número de mês inválido.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
