<?php
// Verifica se os campos de usuário e senha foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos de login foram preenchidos
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        // Inicia a sessão
        session_start();

        // Define uma variável de sessão para indicar que o usuário está logado
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["gmail"] = $_POST["gmail"];
        $_SESSION["phone"] = $_POST["phone"];
        // Redireciona para o index.php após um login bem-sucedido
        header("location: sucess.php");
        exit;
    }
}
?>

<?php
session_start();

// Verifica se a ação de logout foi acionada
if (isset($_POST['logout'])) {
    // Destroi todas as informações da sessão
    session_unset();
    session_destroy();
    
    // Redireciona para a página de login após o logout
    header("location: index.php");
    exit;
}
?>