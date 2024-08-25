<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login - Physioline</title>
</head>
<body class="custom-background-body">
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-6">
                <form action="testLogin.php" method="POST">
                    <div class="mb-3">
                        <label for="login" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Digite seu email">
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="lembrar">
                        <label class="form-check-label" for="lembrar">Lembrar-me</label>
                    </div>
                    <div class="mb-3">
                        <p>Não tem cadastro? <a href="/dev_projects/physioline/assets/src/cadastro.php">Clique aqui</a> para se cadastrar.</p>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Entrar</button>
                </form>
            </div>
            <div class="text-center mt-3">
                <a href="/dev_projects/physioline/index.php" class="btn btn-secondary">Voltar para a página inicial</a>
            </div>
        </div>
    </div>

</body>
</html>