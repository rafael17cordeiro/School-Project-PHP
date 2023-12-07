<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
<div class="login-container">
   <h2>Login</h2>
   <hr style="width: 85%;"><br>
        <form action="login_process.php" method="post">
            <div class="input-container">
                <label for="username"><i class="fas fa-user"></i>Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
               <p class="error"><?php echo $usernameErr; ?></p>
            </div>

            <div class="input-container">
                <label for="password"><i class="fas fa-lock"></i>Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
                <p class="error"><?php echo $passwordErr; ?></p>
            </div>

            <input type="submit" value="Login">
            
            <p>Se não tiver conta <a href="">Registe</a></p>
        </form>
</div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
  </body>
</html>

