<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
</head>

<body>
    <div class="loader"></div>
    <header>
        <a href="index.php"><img class="logo" src="img/logo.png" alt=""></a>
        <input type="checkbox" id="check">
        <label for="check" class="icons">
            <i class='bx bx-menu' id="menu-icon"></i>
            <i class="bx bx-x" id="close-icon"></i>
        </label>
        <nav class="navigation">
            <a href="terapeutas.php">Therapists</a>
            <a href="contact.php">Contact</a>
            <?php
            session_start();

            // Verifica se o usuário está logado
            if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                echo "<a href='profile.php'><i class='bx bxs-user'> </i>"  . $_SESSION["username"] . "</a>";
            } else {
                echo '<a class="loginBtn" href="login.php"><button>Login</button></a>';
            }
            ?>

        </nav>
    </header>
    <div class="container">
        <div class="login-form">
            <h1>Register</h1>
            <form action="processar_register.php" method="post">
                <div class="input-group">
                    <label for="username"><i class='bx bxs-user'></i> Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="gmail"><i class='bx bxs-envelope'></i> Gmail:</label>
                    <input type="text" id="gmail" name="gmail" required>
                </div>
                <div class="input-group">
                    <label for="phone"><i class='bx bxs-phone'></i> Phone Number:</label>
                    <input type="text" id="phone" name="phone" required>
                </div>

                <div class="input-group">
                    <label for="password"><i class='bx bxs-lock-alt'></i> Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="input-group">
                    <button class="moreBtn" type="submit">Register</button><br>
                </div>
            </form>
        </div>
    </div>



    <script src="js/app.js"></script>
</body>

</html>