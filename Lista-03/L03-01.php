<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média de Notas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Média de Notas</h1>
        <form method="post">
            <?php
            $alunos = [];
            for ($i = 1; $i <= 10; $i++) {
                echo "<div class='form-group'>";
                echo "<label for='nome{$i}'>Digite o nome do aluno {$i}:</label>";
                echo "<input type='text' class='form-control' id='nome{$i}' name='nome{$i}' required>";
                echo "<label for='nota{$i}'>Digite a nota do aluno {$i}:</label>";
                echo "<input type='number' class='form-control' id='nota{$i}' name='nota{$i}' step='0.01' required>";
                echo "</div>";
            }
            ?>
            <button type="submit" class="btn btn-primary">Calcular Média</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $maiorNota = -1;
            $somaNotas = 0;
            $alunoComMaiorNota = "";

            for ($i = 1; $i <= 10; $i++) {
                $nome = $_POST["nome{$i}"];
                $nota = $_POST["nota{$i}"];
                $somaNotas += $nota;

                if ($nota > $maiorNota) {
                    $maiorNota = $nota;
                    $alunoComMaiorNota = $nome;
                }
            }

            $media = $somaNotas / 10;

            echo "<h2>Média de Notas da Classe: $media</h2>";
            echo "<p>O aluno com a maior nota é: $alunoComMaiorNota, com nota $maiorNota</p>";
        }
        ?>
    </div>
</body>
</html>
