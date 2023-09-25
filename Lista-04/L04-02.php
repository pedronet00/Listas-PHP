<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenar Alunos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Ordenar Alunos</h1>
        <form method="post">
            <?php
            $alunos = [];
            for ($i = 1; $i <= 10; $i++) {
                echo "<div class='form-group'>";
                echo "<label for='aluno{$i}'>Digite o nome do aluno {$i}:</label>";
                echo "<input type='text' class='form-control' id='aluno{$i}' name='aluno{$i}' required>";
                echo "</div>";
            }
            ?>
            <button type="submit" class="btn btn-primary">Ordenar</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            for ($i = 1; $i <= 10; $i++) {
                $alunos[] = $_POST["aluno{$i}"];
            }
            sort($alunos);
            echo "<h2>Nomes dos alunos em ordem alfabética:</h2>";
            foreach ($alunos as $aluno) {
                echo "<p>$aluno</p>";
            }
        }
        ?>
    </div>
</body>
</html>
