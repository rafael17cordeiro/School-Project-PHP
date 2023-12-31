<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Home</title>
</head>

<body class="">
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
                echo "<a href='profile.php'><i class='bx bxs-user'></i>" . $_SESSION["username"] . "</a>";
            } else {
                echo '<a class="loginBtn" href="login.php"><button>Login</button></a>';
            }
            ?>

        </nav>
    </header>

    <div class="welcome-section">
        <div class="welcome-content">
            <h1>Our legacy speaks through our healed clients</h1>
        </div>
    </div>



    <div class="sessions" id="sessions">
        <div class="sessions-content">
            <h1 class="titulo">Popular Therapy Sessions</h1>
            <div class="cards">
                <div class="carta hidden ">
                    <h1>60$/session</h1>
                    <h5>Therapist Details:</h5><br>
                    <p>Jackie Chan <br>5 years of experience</p><br>
                    <a href="terapeutas.php"><button class="moreBtn">View Therapist</button></a>
                </div>

                <div class="carta carta-bigger hidden">
                    <h1>90$/session</h1>
                    <h5>Therapist Details:</h5><br>
                    <p>Joaquin Phoenix <br>15 years of experience</p><br>
                    <a href="terapeutas.php"><button class="moreBtn">View Therapist</button></a>
                </div>

                <div class="carta hidden">
                    <h1>40$/session</h1>
                    <h5>Therapist Details:</h5><br>
                    <p>Ross Geller <br>1 years of experience</p><br>
                    <a href="terapeutas.php"><button class="moreBtn">View Therapist</button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="depoimentos">

        <div class="texto hidden">
            <h1>NatureMind Can Help You</h1><br>
            <p>NatureMind can help anyone that struggles with mental health problems with guided therapy sessions.</p><br>
            <p>Although therapy in Canada is available, it is not cheap and fees can range from $50-$240 per session. Many people with mental health problems require 12-16 sessions on average and only 50 percent of patients recover as indicated by self-reported symptom measures.</p>
        </div>
        <div class="imagem">
            <img src="img/hero.jpg" alt="">
        </div>
    </div>
    <footer>
    <p>&copy; 2023 NatureMind. All rights reserved.</p>
  </footer>
    <script src="js/app.js"></script>
</body>

</html>