<?php
require_once __DIR__ . '/../src/init.php';
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Bazar-shop | e-commerce</title>
    <link href="style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
</head>

<body>
    <div class="header">
        <div class="containerNavigation">
            <div class="navbar">
                <div class="logo">
                    <img src="assets/bootstrap-5.3.2-dist/img/logo.png" width="100px" alt="logo">
                </div>
                <nav>
                    <ul>
                        <li><a href="home.php">Accueil</li></a>
                        <li><a href="products.php">Produits</li></a>
                        <li><a href="">À propos</li></a>
                        <li><a href="admin.php">Admin</li></a>
                        <li><a href="login.php">Connexion</li></a>
                    </ul>
                    <img src="assets/bootstrap-5.3.2-dist/img/shopping-bag.png" width="30px" height="30px">
                </nav>
            </div>

            <!-- Account page -->

            <button type="buton" class="btn"><a href="admin.php">
                    Ajoutez vos produits
            </button></a>



</body>

</html>