<?php
session_start(); // Inicia a sessão

// Verifica se os dados do formulário foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Abre o arquivo CSV para leitura
    $file = 'users.csv';
    $handle = fopen($file, "r");

    // Loop através do arquivo CSV para encontrar o usuário
    $found = false;
    while (($data = fgetcsv($handle)) !== false) {
        // Verifica se o nome de usuário e a senha correspondem
        if ($data[0] === $username && $data[3] === $password) { // Supondo que o nome de usuário está na primeira coluna e a senha na quarta coluna
            // Define os dados do usuário na sessão após o login bem-sucedido
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $data[0]; // Nome de usuário
            $_SESSION["gmail"] = $data[1]; // Email
            $_SESSION["phone"] = $data[2]; // Número de telefone
            $found = true;
            break;
        }
    }

    // Fecha o arquivo CSV
    fclose($handle);

    // Verifica se o usuário foi encontrado
    if ($found) {
        // Redireciona para a página de sucesso após o login
        header("Location: sucess.php");
        exit();
    } else {
        // Redireciona para a página de erro caso a autenticação falhe
        header("Location: error.php");
        exit();
    }
}
