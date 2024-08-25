<?php
if (isset($_POST['submit'])) {
    $nome = $_POST['username'];
    $senha = $_POST['password'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $phone = $_POST['phone'];

    include_once('config.php');

    $connection = new mysqli($host, $user, $password, $database);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $stmt = $connection->prepare("INSERT INTO paciente (nome, senha, email, cpf, celular) VALUES (?, ?, ?, ?, ?)");

    if (!$stmt) {
        die("Prepare failed: " . $connection->error);
    }

    $stmt->bind_param("sssss", $nome, $senha, $email, $cpf, $phone);

    if (!$stmt->execute()) {
        die("Execute failed: " . $stmt->error);
    }

    echo "Registro inserido com sucesso.";

    $stmt->close();
    $connection->close();
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/cadastro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Formulário Cadastro - Physioline</title>
</head>
<body class="custom-background">
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-6">
                <form action="cadastro.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Usuário</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Usuário" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Senha" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Entre com seu email" required>
                    </div>
                    <div class="mb-3">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Entre com seu CPF" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Celular</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Entre com seu celular">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Enviar</button>
                </form>
            </div>
            <div class="text-center mt-3">
                <a href="/dev_projects/physioline/" class="btn btn-secondary">Voltar para a tela de login</a>
            </div>
        </div>
    </div>
</body>
</html>
