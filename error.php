<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/popups.css">
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
  <div class="container">
    <div class="popup" id="popup">
      <img src="img/decline.png" alt="">
      <h2>There's a problem</h2>
      <p>You dont have acess to this page!</p>
      <p>Make sure to <a href="login.php">Log in</a></p>
      <a href="index.php"><button style="margin-top: 20px;" class="moreBtn" type="submit">OK</button></a><br>
    </div>
  </div>
  <script src="js/app.js"></script>
</body>

</html>