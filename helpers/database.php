<?php

$query = "INSERT INTO users (name, email, password, level) VALUES ('$name', '$email', '$password_hashed', 'common')";

if(mysqli_query($connection, $query)) {
    // Configurar a sessão
    session_start();

    // Armazenar o ID do usuário na sessão
    $_SESSION['user_id'] = mysqli_insert_id($connection);

    // Outras informações que você pode querer armazenar na sessão
    $_SESSION['user_name'] = $name;
    $_SESSION['user_email'] = $email;

    // Redirecionar para admin/index.php
    header("Location: ../admin/index.php");
    exit(); // Certifique-se de sair após o redirecionamento
} else {
    // Em caso de erro, redirecione para uma página de erro ou forneça uma mensagem amigável
    header("Location: erro.php");
    exit();
}

mysqli_close($connection);

?>