<?php
session_start(); // Inicia a sessão

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $file = 'users.csv';
    $handle = fopen($file, "r");

    $found = false;
    while (($data = fgetcsv($handle)) !== false) {
        if ($data[0] === $username && ($data[3] === $password || empty($data[3]))) {
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $data[0];
            $_SESSION["gmail"] = $data[1];
            $_SESSION["phone"] = $data[2];
            $_SESSION["profile_picture"] = $data[4]; // Modifiquei para usar o índice correto do caminho da imagem

            setcookie("username", $data[0], time() + 3600, "/");
            setcookie("loggedin", true, time() + 3600, "/");

            $found = true;
            break;
        }
    }

    fclose($handle);

    if ($found) {
        header("Location: sucess.php");
        exit();
    } else {
        header("Location: error.php");
        exit();
    }
}
?>
