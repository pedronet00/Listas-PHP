<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter Metros em Centímetros</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Converter Metros em Centímetros</h1>
        <form method="post">
            <div class="form-group">
                <label for="metros">Digite a quantidade de metros:</label>
                <input type="number" class="form-control" id="metros" name="metros" required>
            </div>
            <button type="submit" class="btn btn-primary">Converter</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $metros = $_POST["metros"];
            $centimetros = $metros * 100;
            echo "<p>{$metros} metros equivalem a {$centimetros} centímetros</p>";
        }
        ?>
    </div>
</body>
</html>
