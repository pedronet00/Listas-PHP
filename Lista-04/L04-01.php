<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Validar Data</h1>
        <form method="post">
            <div class="form-group">
                <label for="data">Digite uma data (AAAA-MM-DD):</label>
                <input type="text" class="form-control" id="data" name="data" required>
            </div>
            <button type="submit" class="btn btn-primary">Validar</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data = $_POST["data"];
            if (strtotime($data) !== false) {
                $diaSemana = date('l', strtotime($data));
                echo "<p>A data é válida e o dia da semana é $diaSemana</p>";
            } else {
                echo "<p>Data inválida.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
