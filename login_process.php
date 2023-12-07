<?php
// Inicialize as variáveis de erro
$usernameErr = $passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the fields are empty
    if (empty($username)) {
        $usernameErr = "* Campo de usuário é obrigatório";
    }

    if (empty($password)) {
        $passwordErr = "* Campo de senha é obrigatório";
    }

    if ($username === $valid_username && $password === $valid_password) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        header("Location: login.php?error=Invalid credentials");
        exit();
    }
}
?>
