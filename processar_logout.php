<?php
session_start(); // Inicia a sessão

// Verifica se o botão de logout foi acionado
if (isset($_POST['logout'])) {
    // Limpa todas as variáveis de sessão
    $_SESSION = array();

    // Invalida a sessão atual
    session_destroy();

    // Redireciona para a página de login ou para onde desejar após o logout
    header("Location: index.php"); // Substitua "login.php" pela página desejada
    exit();
}
