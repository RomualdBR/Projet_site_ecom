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

            <button type="buton" class="button"><a href="admin.php">
                    Ajoutez vos produits
            </button></a>
            <div class="row">
            <div class="col-4">
                <img src="assets/bootstrap-5.3.2-dist/img/girophare-1.png">
                <h4>Girophare qualité master Nike</h4>
                <div class="rating">
                    <p>&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                </div>
                <button type="button" class="button">Add</button>
                <p>49.99 €</p>
            </div>
            <div class="col-4">
                <img src="assets/bootstrap-5.3.2-dist/img/girophare-1.png">
                <h4>Girophare qualité master Nike</h4>
                <div class="rating">
                    <p>&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                </div>
                <button type="button" class="button">Add</button>
                <p>49.99 €</p>
            </div>
            <div class="col-4">
                <img src="assets/bootstrap-5.3.2-dist/img/panneau-1.png">
                <h4>Panneau rare limité Quechua</h4>
                <div class="rating">
                    <p>&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                </div>
                <button type="button" class="button">Add</button>
                <p>629.99 €</p>
            </div>
            <div class="col-4">
                <img src="assets/bootstrap-5.3.2-dist/img/porte-cle-1.png">
                <h4>Porte clé solide Gucci edition</h4>
                <div class="rating">
                    <p>&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                </div>
                <button type="button" class="button">Add</button>
                <p>9.99 €</p>
            </div>
            


</body>

</html>