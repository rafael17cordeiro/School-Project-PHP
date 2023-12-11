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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contacto.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Home</title>
</head>

<body class="hidden">
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
    <div class="contact-section ">
        <div class="contact-content ">
            <h1>Keep In Touch</h1>
            <form action="" method="">
                <div class="input-group">
                    <label for="gmail"><i class='bx bxs-envelope'></i> Gmail</label>
                    <input type="text" id="gmail" name="gmail" required>
                </div>
                <div class="input-group">
                    <label for="Message"><i class='bx bxs-message'></i> Message</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="input-group">
                    <button class="moreBtn" type="submit"> Send</button><br>
                </div>
            </form>


        </div>
    </div>
    <script src="js/app.js"></script>
</body>

</html>