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
}
