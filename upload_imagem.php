<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["imagem"])) {
    $username = $_SESSION["username"];
    $targetDir = "uploads/"; // Pasta onde as imagens serão salvas
    $imageFileType = strtolower(pathinfo($_FILES["imagem"]["name"], PATHINFO_EXTENSION));
    $newFileName = $targetDir . $username . "." . $imageFileType;

    // Move o arquivo para a pasta de uploads e atualiza a variável de sessão
    if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $newFileName)) {
        $_SESSION["profile_picture"] = $newFileName;

        // Atualiza o arquivo CSV com o novo caminho da imagem
        $file = 'users.csv';
        $lines = file($file);

        foreach ($lines as $key => $line) {
            $data = str_getcsv($line);
            if ($data[0] === $username) {
                $data[4] = $newFileName; // Atualiza o campo da imagem no CSV
                $lines[$key] = implode(',', $data) . PHP_EOL;
                break;
            }
        }

        // Sobrescreve o arquivo CSV com as alterações
        file_put_contents($file, implode('', $lines));

        // Redireciona de volta para o perfil após o upload
        header("Location: profile.php");
        exit();
    } else {
        header("location: profile.php");
    }
} else {
    echo "Desculpe, o seu arquivo não foi enviado.";
}
?>
