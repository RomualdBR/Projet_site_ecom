<?php
require_once __DIR__ . "/../../src/init.php";

if (empty($_POST['username'])) {
    $_SESSION['error_message'] = 'Veuillez entrer votre nom d\'utilisateur.';
    header('Location: /login.php');
    die();
}

if (empty($_POST['pswrd'])) {
    $_SESSION['error_message'] = 'Veuillez entrer votre mot de passe.';
    header('Location: /login.php');
    die();
}

if (isset($_POST['username']) && isset($_POST['pswrd'])) {
    $username = htmlspecialchars($_POST['username']);
    $pswrd = hash('sha256', $_POST['pswrd']);
    $st1 = $pdo->prepare('SELECT * FROM users WHERE username = ? and pswrd = ?');
    $st1->execute(array($username, $pswrd));

    if ($st1->rowCount() > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['pswrd'] = $pswrd;
        $_SESSION['id'] = $st1->fetch()['id'];
        $_SESSION['error_message'] = 'Bonjour ' . $_SESSION['username'] . ' et bienvenue.';
        header('Location: /login.php');
        die();
    } else {
        $_SESSION['error_message'] = 'Votre mot de passe ou pseudo est incorrect.';
        header('Location: /login.php');
        die();
    }
}
