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
            <img src="img/the-rock2.jpg" alt=""><br>
            <h3>The Rock</h3>
            <p>5 years of experience</p><br>
            <button onclick="togglePopup()" class="terapeutaBtn">View Session</button>
        </div>

        <div class="card">
            <img src="img/jack.jpg" alt=""><br>
            <h3>Jackie chan</h3>
            <p>15 years of experience</p><br>
            <button onclick="togglePopup2()" class="terapeutaBtn">View Session</button>
        </div>
        <div class="card">
            <img src="img/kaney.jpg" alt=""><br>
            <h3>Ye</h3>
            <p>1 years of experience</p><br>
            <button onclick="togglePopup3()" class="terapeutaBtn">View Session</button>
        </div>
    </div>
    
    <div class="popup" id="popup-1">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn" onclick="togglePopup()"></div>
            <h1>Therapy with The Rock(5 year of experience)</h1><br>
            <p><b>Inspirational and Motivational:</b> The Rock would adopt a motivational approach, emphasizing the importance of mental strength and overcoming challenges.</p><br>
            <p><b>Practical Focus:</b> Practical sessions involving goal-setting and physical exercises to strengthen both body and mind.</p><br>
            <p><b>Emphasis on Resilience:</b> He would encourage turning challenges into opportunities, promoting a resilient mindset.</p><br>
            <p><b>Compassionate and Direct:</b> Despite his imposing presence, he would offer honest advice with empathy.</p><br>
            <p><b>Source of Inspiration:</b> Sharing personal experiences to inspire individuals to reach their fullest potential.</p><br>

        </div>
    </div>

    <div class="popup" id="popup-2">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn" onclick="togglePopup2()"></div>
            <h1>Therapy with Jackie Chan(15 year of experience)</h1><br>
            <p><b>Physical and Mental Harmony:</b> Jackie Chan's therapy would likely emphasize the balance between physical and mental well-being. He might incorporate martial arts principles to teach discipline, focus, and inner peace.</p><br>
            <p><b>Humor and Lightness:</b> Known for his humor, he could infuse sessions with light-heartedness, using laughter as a tool for stress relief and creating a comfortable environment.</p><br>
            <p><b>Practical Problem-Solving:</b> Given his action-oriented approach in movies, Jackie might employ practical problem-solving techniques, encouraging clients to approach challenges with creativity and resourcefulness.</p><br>
            <p><b>Cultural Insights:</b> With his multicultural experiences, he might incorporate cultural wisdom into therapy, providing diverse perspectives and fostering open-mindedness.</p><br>
            <p><b>Lead by Example:</b> Jackie Chan's personal journey of resilience and success could serve as an inspiring example, motivating clients to persevere through difficulties.</p><br>

        </div>
    </div>
    <div class="popup" id="popup-3">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn" onclick="togglePopup3()"></div>
            <h1>Therapy with Kanye West (1 year of experience)</h1><br>
            <p><b>Creativity and Expression:</b> Kanye West, known for his artistic expression, would encourage creative expression as a form of therapy. He might use artistic methods such as music and art to explore emotions and experiences.</p><br>
            <p><b>Exploration of New Perspectives:</b> Despite limited experience, Kanye would encourage exploring different perspectives. He might propose out-of-the-box thinking techniques and questioning to provoke deep reflections.</p><br>
            <p><b>Emphasis on Authenticity:</b> Given his own authentic approach, he would value authenticity and encourage understanding and acceptance of one's own emotions without filters.</p><br>
            <p><b>Support in Self-Reflection:</b> Despite limited experience, Kanye could guide self-reflection processes, stimulating the analysis of one's own thoughts and feelings.</p><br>
            <p><b>Encouragement for Personal Growth:</b> Despite his short experience, he would be an advocate for personal growth, promoting self-acceptance and the pursuit of continuous evolution.</p><br>

        </div>
    </div>
    <footer>
        <p>&copy; 2023 NatureMind. All rights reserved.</p>
    </footer>
    <script src="js/app.js"></script>
</body>

</html>