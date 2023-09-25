<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Horas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Conversor de Horas</h1>
        <form method="post">
            <div class="form-group">
                <label for="hora">Digite a hora (formato HH:MM):</label>
                <input type="text" class="form-control" id="hora" name="hora" pattern="^([0-1][0-9]|2[0-3]):[0-5][0-9]$" required>
            </div>
            <button type="submit" class="btn btn-primary">Converter</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $hora = $_POST["hora"];
            list($horas, $minutos) = explode(':', $hora);
            $periodo = ($horas >= 12) ? "P.M." : "A.M.";
            if ($horas > 12) {
                $horas -= 12;
            }
            echo "<p>A hora no formato 12 horas é: {$horas}:{$minutos} {$periodo}</p>";
        }
        ?>
    </div>
</body>
</html>
