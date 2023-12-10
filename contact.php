<?php
session_start();
// Verifica se o usuário não está logado, redireciona para a página de login
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contacto.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Home</title>
</head>
<header>
        <a href="index.php"><img class="logo" src="img/logo.png" alt=""></a>
        <input type="checkbox" id="check">
        <label for="check" class="icons">
            <i class='bx bx-menu' id="menu-icon"></i>
            <i class="bx bx-x" id="close-icon"></i>
        </label>
            <nav class="navigation">
                <a href="terapeutas.php">Therapists</a>
                <a style="color:#00ad5c;" href="contact.php">Contact</a>
                <?php

// Verifica se o usuário está logado
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    echo "<a href='profile.php'><i class='bx bxs-user'> </i>"  . $_SESSION["username"] . "</a>";

} else {
    echo '<a class="loginBtn" href="login.php"><button>Login</button></a>';
}
?>

            </nav>
        </header>

     
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<div class="contact-card">
    <div class="contact-info">
        <h1>My Mind</h1>
        <h3>Designer & Developer</h3><br>
        <p><i class='bx bxs-envelope'></i> johndoe@example.com</p>
        <p><i class='bx bxs-phone'></i> +1234567890</p>
        <p><i class='bx bxs-map'></i> 123 Main Street, City, Country</p>
        <p><i class='bx bxs-message'></i> Leave a message</p>
    </div>
</div>


</body>
</html>
