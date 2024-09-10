<?php
    session_start();

    if(!isset($_SESSION['email']) || !isset($_SESSION['senha'])) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header("Location: /dev_projects/physioline/assets/src/login.php");
    }

    $email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sistema</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/dev_projects/physioline/index.php">Physioline</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/dev_projects/physioline/assets/src/sistema.php">Sistema</a>
                    </li>
                </ul>
                <ul class="navbar-nav"> 
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php" style="color: red;">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <?php
                            echo "<h5 class='card-title text-center'>Bem-vindo, $email</h5>";
                        ?>
                        <h6 class="card-subtitle mb-2 text-muted text-center">Agenda do Paciente</h6>
                        <ul class="list-group" style="padding-top: 10px;">
                            <li class="list-group-item">Consulta 1 - Segunda-feira, 10:00 AM - Fisioterapia - Dra. Aline</li>
                            <li class="list-group-item">Consulta 2 - Terça-feira, 2:00 PM - Fisioterapia - Dr. Pedro</li>
                            <li class="list-group-item">Consulta 3 - Quarta-feira, 4:30 PM - Fisioterapia - Dr. Joao</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>