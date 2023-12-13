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
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum sequi voluptatem illo quo nobis, animi reprehenderit voluptates alias eligendi iusto doloremque vero ipsam adipisci, vitae velit labore sunt minus perferendis?
            </p><br>
            <button onclick="togglePopup()" class="terapeutaBtn">Purchase Session</button>
        </div>

        <div class="card">
            <img src="img/ric.jpeg" alt=""><br>
            <h3>Ric Fazeres</h3>
            <p>Ric Fazeres, a prominent figure in the gaming community, transitions his expertise into therapy. Leveraging his deep understanding of gaming culture, he fosters connections and aids individuals in navigating life's challenges.</p><br>
            <button onclick="togglePopup2()" class="terapeutaBtn">Purchase Session</button>
        </div>
        <div class="card">
            <img src="img/kaney.jpg" alt=""><br>
            <h3>Ye</h3>
            <p>Kanye West, known for his musical prowess and creative vision, translates his unique perspective into therapy. His innovative approach and life experiences empower individuals, encouraging them to embrace their own distinct paths to personal growth.</p><br>
            <button onclick="togglePopup3()" class="terapeutaBtn">Purchase Session</button>
        </div>
    </div>


    <div class="popup" id="popup-1">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn" onclick="togglePopup()"></div>
            <h1>The Rock</h1><br>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia ut quisquam repellat dolore, nostrum rerum beatae veniam dolores vero, perferendis eius obcaecati minima debitis id libero vitae modi soluta adipisci.</p><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint illum ab ratione rem quas, nobis iusto atque, doloribus at distinctio in. Necessitatibus assumenda repellendus animi nam. Adipisci nemo quas ratione?</p><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint illum ab ratione rem quas,
                nobis iusto atque, doloribus at distinctio in. Necessitatibus assumenda repellendus animi nam.
                Adipisci nemo quas ratione?</p>
        </div>
    </div>

    <div class="popup" id="popup-2">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn" onclick="togglePopup2()"></div>
            <h1>Ric Fazeres</h1><br>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia ut quisquam repellat dolore, nostrum rerum beatae veniam dolores vero, perferendis eius obcaecati minima debitis id libero vitae modi soluta adipisci.</p><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint illum ab ratione rem quas, nobis iusto atque, doloribus at distinctio in. Necessitatibus assumenda repellendus animi nam. Adipisci nemo quas ratione?</p><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint illum ab ratione rem quas,
                nobis iusto atque, doloribus at distinctio in. Necessitatibus assumenda repellendus animi nam.
                Adipisci nemo quas ratione?</p>
        </div>
    </div>
    <div class="popup" id="popup-3">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn" onclick="togglePopup3()"></div>
            <h1>Ye</h1><br>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia ut quisquam repellat dolore, nostrum rerum beatae veniam dolores vero, perferendis eius obcaecati minima debitis id libero vitae modi soluta adipisci.</p><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint illum ab ratione rem quas, nobis iusto atque, doloribus at distinctio in. Necessitatibus assumenda repellendus animi nam. Adipisci nemo quas ratione?</p><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint illum ab ratione rem quas,
                nobis iusto atque, doloribus at distinctio in. Necessitatibus assumenda repellendus animi nam.
                Adipisci nemo quas ratione?</p>
        </div>
    </div>
    <script src="js/app.js"></script>
</body>

</html>