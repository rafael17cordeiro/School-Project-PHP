<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Profile</title>
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
                echo "<a style='color:#00ad5c;' href='profile.php'><i class='bx bxs-user'> </i>"  . $_SESSION["username"] . "</a>";
            } else {
                echo '<a  class="loginBtn" href="login.php"><button>Login</button></a>';
            }
            ?>

        </nav>
    </header>
    <?php
    session_start(); // Certifique-se de iniciar a sessão no início da página

    // Verifica se o usuário está logado
   if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    // Verifica se a imagem de perfil está definida na sessão
    
        echo '<div class="container">';
        echo '<div class="login-form">';
        echo '<h1>Profile</h1>';
        echo '<div class="input-group">';
        echo '<label for="username"><i class="bx bxs-user"></i> Username:</label>';
        echo '<input type="text" id="username" name="username" value="' . $_SESSION["username"] . '" readonly>';
        echo '</div>';
        echo '<div class="input-group">';
        echo '<label for="gmail"><i class="bx bxs-envelope"></i> Gmail:</label>';
        echo '<input type="text" id="gmail" name="gmail" value="' . $_SESSION["gmail"] . '" readonly>';
        echo '</div>';
        echo '<div class="input-group">';
        echo '<label for="phone"><i class="bx bxs-phone"></i> Phone Number:</label>';
        echo '<input type="text" id="phone" name="phone" value="' . $_SESSION["phone"] . '" readonly>';
        echo '</div>';
        echo '<form action="processar_logout.php" method="post" class="logout-form">';
        echo '<button class="moreBtn" type="submit" name="logout"><i class="bx bx-log-out"></i> Logout</button>';
        echo '</form>';
        echo '</div>';

        echo '<div class="image-right">';
        echo '<div class="profile-picture">';
        if (isset($_SESSION["profile_picture"])) {
            // Se estiver definida, exibe a imagem de perfil do usuário
            echo '<img src="' . $_SESSION["profile_picture"] . '" alt="Profile Picture">';
        } else {
            // Se não estiver definida, exibe a imagem padrão ou uma mensagem indicando ausência de imagem
            echo '<img src="img/user.png" alt="Default Profile Picture">';
        }
    
        echo '</div>'; // Div para a imagem circular
        echo '<form action="upload_imagem.php" method="post" enctype="multipart/form-data" class="upload-form">';
        echo '<input type="file" name="imagem" id="imagem" accept="image/*">';
        echo '<button type="submit" class="uploadBtn"><i class="bx bx-upload"></i> Upload Image</button>';
        echo '</form>';
        echo '</div>';

        echo '</div>';
    } else {
        // Se o usuário não estiver logado, redirecione para a página de login
        header("Location: login.php");
        exit();
    }
    ?>


    <script src="js/app.js"></script>
    <footer>
        <p>&copy; 2023 NatureMind. All rights reserved.</p>
    </footer>
</body>

</html>