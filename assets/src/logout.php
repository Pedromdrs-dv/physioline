<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['senha']);
header("Location: /dev_projects/physioline/assets/src/login.php");
?>