<?php 
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        include_once('config.php');

        $connection = new mysqli($host, $user, $password, $database);

        if($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        $stmt = $connection->prepare("SELECT * FROM paciente WHERE email = ? AND senha = ?");

        if(!$stmt) {
            die("Prepare failed: " . $connection->error);
        }

        $stmt->bind_param("ss", $email, $senha);

        if(!$stmt->execute()) {
            die("Execute failed: " . $stmt->error);
        }

        $result = $stmt->get_result();

        if($result->num_rows > 0) {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header("Location: /dev_projects/physioline/assets/src/sistema.php");
        }
        else if($result->num_rows == 0) {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header("Location: /dev_projects/physioline/login.php");
        }

        $stmt->close();
        $connection->close();
    }

    else {
        header("Location: /dev_projects/physioline/index.php");
    }
?>