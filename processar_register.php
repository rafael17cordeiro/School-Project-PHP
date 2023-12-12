<?php
session_start(); // Inicia a sessão

// Verifica se os dados do formulário foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $username = $_POST['username'];
    $gmail = $_POST['gmail'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // Abre ou cria um arquivo CSV para salvar os dados
    $file = 'users.csv';

    // Cria o conteúdo a ser adicionado no arquivo CSV
    $content = "$username,$gmail,$phone,$password\n";

    // Adiciona os dados ao arquivo CSV
    file_put_contents($file, $content, FILE_APPEND);

    // Define os dados na sessão após o registro bem-sucedido
    $_SESSION["loggedin"] = true;
    $_SESSION["username"] = $username;
    $_SESSION["gmail"] = $gmail;
    $_SESSION["phone"] = $phone;

    // Redireciona para a página de sucesso após o registro
    header("Location: sucess.php");
} else {
    header("Location: error.php");
}
