<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média de Notas e Aprovação</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Média de Notas e Aprovação</h1>
        <form method="post">
            <?php
            $alunos = [];
            for ($i = 1; $i <= 10; $i++) {
                echo "<div class='form-group'>";
                echo "<label for='nome{$i}'>Nome do Aluno {$i}:</label>";
                echo "<input type='text' class='form-control' id='nome{$i}' name='nome{$i}' required>";
                echo "<label for='nota1{$i}'>Nota 1 do Aluno {$i}:</label>";
                echo "<input type='number' class='form-control' id='nota1{$i}' name='nota1{$i}' step='0.01' required>";
                echo "<label for='nota2{$i}'>Nota 2 do Aluno {$i}:</label>";
                echo "<input type='number' class='form-control' id='nota2{$i}' name='nota2{$i}' step='0.01' required>";
                echo "</div>";
            }
            ?>
            <button type="submit" class="btn btn-primary">Calcular Média e Aprovação</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $aprovados = [];
            $reprovados = [];

            for ($i = 1; $i <= 10; $i++) {
                $nome = $_POST["nome{$i}"];
                $nota1 = $_POST["nota1{$i}"];
                $nota2 = $_POST["nota2{$i}"];
                $media = ($nota1 + $nota2) / 2;

                $alunos[$nome] = $media;

                if ($media >= 6.0) {
                    $aprovados[] = $nome;
                } else {
                    $reprovados[] = $nome;
                }
            }

            arsort($alunos);

            echo "<h2>Lista de Aprovados:</h2>";
            foreach ($aprovados as $aprovado) {
                echo "<p>$aprovado - Média: " . number_format($alunos[$aprovado], 2) . "</p>";
            }

            echo "<h2>Lista de Reprovados:</h2>";
            foreach ($reprovados as $reprovado) {
                echo "<p>$reprovado</p>";
            }
        }
        ?>
    </div>
</body>
</html>
