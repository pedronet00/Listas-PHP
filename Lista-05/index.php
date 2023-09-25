<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro de Cliente</h1>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" required>
            </div>
            <div class="form-group">
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
            </div>
            <div class="form-group">
                <label>Gênero:</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="sexo_masculino" name="sexo" value="Masculino" required>
                    <label class="form-check-label" for="sexo_masculino">Masculino</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="sexo_feminino" name="sexo" value="Feminino">
                    <label class="form-check-label" for="sexo_feminino">Feminino</label>
                </div>
            </div>
            <div class="form-group">
                <label for="estado_civil">Estado Civil:</label>
                <select class="form-control" id="estado_civil" name="estado_civil" required>
                    <option value="Solteiro">Solteiro</option>
                    <option value="Casado">Casado</option>
                    <option value="Divorciado">Divorciado</option>
                    <option value="Viúvo">Viúvo</option>
                </select>
            </div>
            <div class="form-group">
                <label for="renda_mensal">Renda Mensal:</label>
                <input type="text" class="form-control" id="renda_mensal" name="renda_mensal" required>
            </div>
            <div class="form-group">
                <label for="logradouro">Logradouro:</label>
                <input type="text" class="form-control" id="logradouro" name="logradouro" required>
            </div>
            <div class="form-group">
                <label for="numero">Número:</label>
                <input type="text" class="form-control" id="numero" name="numero" required>
            </div>
            <div class="form-group">
                <label for="complemento">Complemento:</label>
                <input type="text" class="form-control" id="complemento" name="complemento">
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <select class="form-control" id="estado" name="estado" required>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <!-- Adicione mais estados aqui -->
                </select>
            </div>
            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" class="form-control" id="cidade" name="cidade" required>
            </div>
            <div class="form-group">
                <label for="foto_perfil">Foto de Perfil:</label>
                <input type="file" class="form-control-file" id="foto_perfil" name="foto_perfil" required accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $data_nascimento = $_POST["data_nascimento"];
        $sexo = $_POST["sexo"];
        $estado_civil = $_POST["estado_civil"];
        $renda_mensal = $_POST["renda_mensal"];
        $logradouro = $_POST["logradouro"];
        $numero = $_POST["numero"];
        $complemento = $_POST["complemento"];
        $estado = $_POST["estado"];
        $cidade = $_POST["cidade"];

        // Cria a pasta com o CPF do cliente
        $pasta_cliente = "clientes/$cpf";
        if (!file_exists($pasta_cliente)) {
            mkdir($pasta_cliente, 0777, true);
        }

        // Salva os dados em um arquivo de texto
        $dados_cliente = "Nome: $nome\nCPF: $cpf\nData de Nascimento: $data_nascimento\n";
        $dados_cliente .= "Sexo: $sexo\nEstado Civil: $estado_civil\nRenda Mensal: $renda_mensal\n";
        $dados_cliente .= "Logradouro: $logradouro\nNúmero: $numero\nComplemento: $complemento\n";
        $dados_cliente .= "Estado: $estado\nCidade: $cidade\n";
        $arquivo_dados = "$pasta_cliente/$cpf.txt";
        file_put_contents($arquivo_dados, $dados_cliente);

        // Move a foto de perfil para a pasta do cliente
        $foto_perfil_tmp = $_FILES["foto_perfil"]["tmp_name"];
        $foto_perfil_destino = "$pasta_cliente/$cpf.jpg";
        move_uploaded_file($foto_perfil_tmp, $foto_perfil_destino);

        echo "<div class='container'>";
        echo "<p>Cadastro do cliente $nome realizado com sucesso!</p>";
        echo "</div>";
    }
    ?>

</body>
</html>
