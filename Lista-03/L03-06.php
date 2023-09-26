<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise de Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Análise de Produtos</h1>
        <form method="post">
            <?php
            $produtos = [];
            for ($i = 1; $i <= 5; $i++) {
                echo "<div class='form-group'>";
                echo "<label for='produto{$i}'>Nome do Produto {$i}:</label>";
                echo "<input type='text' class='form-control' id='produto{$i}' name='produto{$i}' required>";
                echo "<label for='preco{$i}'>Preço do Produto {$i}:</label>";
                echo "<input type='number' class='form-control' id='preco{$i}' name='preco{$i}' step='0.01' required>";
                echo "</div>";
            }
            ?>
            <button type="submit" class="btn btn-primary">Analisar Produtos</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $preco_inferior_50 = 0;
            $produtos_entre_50_100 = [];
            $soma_precos_superior_100 = 0;
            $quantidade_precos_superior_100 = 0;

            for ($i = 1; $i <= 5; $i++) {
                $nome_produto = $_POST["produto{$i}"];
                $preco_produto = $_POST["preco{$i}"];

                if ($preco_produto < 50) {
                    $preco_inferior_50++;
                } elseif ($preco_produto >= 50 && $preco_produto <= 100) {
                    $produtos_entre_50_100[] = $nome_produto;
                } else {
                    $soma_precos_superior_100 += $preco_produto;
                    $quantidade_precos_superior_100++;
                }
            }

            $media_precos_superior_100 = ($quantidade_precos_superior_100 > 0) ? ($soma_precos_superior_100 / $quantidade_precos_superior_100) : 0;

            echo "<h2>Resultados:</h2>";
            echo "<p>Produtos com preço inferior a R$50,00: $preco_inferior_50</p>";
            echo "<p>Produtos com preço entre R$50,00 e R$100,00: " . implode(", ", $produtos_entre_50_100) . "</p>";
            echo "<p>Média dos preços dos produtos com preço superior a R$100,00: R$ $media_precos_superior_100</p>";
        }
        ?>
    </div>
</body>
</html>
