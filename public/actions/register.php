<?php
require_once __DIR__ . "/../../src/init.php";

if (empty($_POST['email'])) {
    // error
    $_SESSION['error_message'] = 'Champs email vide.';
    header('Location: /login.php'); // redirige utilisateur
    die(); // stop execution du script
}

if (empty($_POST['pswrd'])) {
    // error
    $_SESSION['error_message'] = 'Champs password vide.';
    header('Location: /login.php'); // redirige utilisateur
    die(); // stop execution du script
}


if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
    $_SESSION['error_message'] = "L'email est invalide";
    header('Location: /login.php'); // redirige utilisateur
    die(); // stop execution du script
}

if (strlen($_POST['pswrd']) < 6) {
    $_SESSION['error_message'] = "Le mot de passe est trop petit <6";
    header('Location: /login.php'); // redirige utilisateur
    die(); // stop execution du script
}

// verifier que l'email n'est pas deja en DB
$st1 = $pdo->prepare('SELECT * FROM users WHERE email = ? OR username = ?');
$st1->execute([$_POST['email'], $_POST['username']]);
$alreadyExists = $st1->fetch(PDO::FETCH_ASSOC);
// $alreadyExists = [ 'username' => 'edouard', .... ];
if ($alreadyExists != false) {
    $_SESSION['error_message'] = 'Déjà inscrit.';
    header('Location: /login.php'); // redirige utilisateur
    die(); // stop execution du script
}


$password = hash('sha256', $_POST['pswrd']);


//ajoute les différents éléments dans la base de donnée.

if (isset($_POST['username']) && isset($_POST['pswrd']) && isset($_POST['email'])) {
    $pdo;
    $pdostatement = $pdo->prepare('INSERT INTO users (email,pswrd,username,created_at)
    VALUES (:Email, :Pswrd, :Username,Now());');
    $pdostatement->execute([
        ':Email' => $_POST['email'],
        ':Pswrd' => $password,
        ':Username' => $_POST['username']
    ]);
    $_SESSION['user_id'] = $pdo->lastInsertId(); // connecté pour plus tard
    $_SESSION['error_message'] = 'Creation de compte réussie.';
    header('Location: /login.php');
    die();
} else {
    $_SESSION['error_message'] = 'Echec de la creation de compte.';
    header('Location: /login.php');
    die();
}
