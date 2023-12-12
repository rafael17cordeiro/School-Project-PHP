<?php
session_start();
// Verifica se o usuário não está logado, redireciona para a página de login
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: error.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/terapeutas.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Therapist</title>
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
            <a style="color:#00ad5c;" href="terapeutas.php">Therapists</a>
            <a href="contact.php">Contact</a>
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

    <div class="titulo-banner">
        <div class="titulo">
            <h1>Therapy Sessions</h1>
        </div>
    </div>

    <div class="cards hidden">
        <div class="card ">
            <img src="img/rock.jpg" alt=""><br>
            <h3>The Rock</h3>
            <p>Dwayne Johnson, aka The Rock, brings decades of experience as a public figure. His journey of overcoming challenges makes him a motivating therapist, blending empathy and determination to inspire others to reach their full potential.

            </p><br>
            <button class="terapeutaBtn">Purchase Session</button>
        </div>
        <div class="card">
            <img src="img/ric.jpeg" alt=""><br>
            <h3>Ric Fazeres</h3>
            <p>Ric Fazeres, a prominent figure in the gaming community, transitions his expertise into therapy. Leveraging his deep understanding of gaming culture, he fosters connections and aids individuals in navigating life's challenges.</p><br>
            <a href=""> <button class="terapeutaBtn">Purchase Session</button></a>
        </div>
        <div class="card">
            <img src="img/kaney.jpg" alt=""><br>
            <h3>Ye</h3>
            <p>Kanye West, known for his musical prowess and creative vision, translates his unique perspective into therapy. His innovative approach and life experiences empower individuals, encouraging them to embrace their own distinct paths to personal growth.</p><br>
            <button class="terapeutaBtn">Purchase Session</button>
        </div>

    </div>
    <div class="cards">
        <div class="card">
            <img src="img/rock.jpg" alt=""><br>
            <h3>The Rock</h3>br
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p><br>
            <button class="terapeutaBtn">Purchase Session</button>
        </div>
        <div class="card">
            <img src="img/ric.jpeg" alt=""><br>
            <h3>Ric Fazeres</h3><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p><br>
            <a href=""> <button class="terapeutaBtn">Purchase Session</button></a>
        </div>
        <div class="card">
            <img src="img/kaney.jpg" alt=""><br>
            <h3>Ye</h3><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p><br>
            <button class="terapeutaBtn">Purchase Session</button>
        </div>

    </div>

    <script src="js/app.js"></script>
</body>

</html>