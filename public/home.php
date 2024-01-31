
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
                    <img src="asset/logo.png" width="100px" alt="logo">
                </div>
                <nav>
                    <ul>
                        <li><a href=""></a>Accueil</li>
                        <li><a href=""></a>Produits</li>
                        <li><a href=""></a>À propos</li>
                        <li><a href=""></a>Contact</li>
                        <li><a href="products.html"></a>Connexion</li>
                    </ul>
                    <img src="asset/shopping-bag.png" width="30px" height="30px">
                </nav>
            </div>
            <div class="row">
                <div class="-col2">
                    <h1>Des accessoires aussi<br>différents des autres !</h1>
                    <p>Venez découvrir les meilleurs revendeurs des portes-clé, panneaux <br>et girophares unique au
                        monde</p>
                    <a href="" class="btn">Explorer maintenant</a>
                </div>
                <div class="-col2">
                    <img src="asset/panneau-accueil.png" "  alt=" panneau">
                </div>

            </div>
        </div>
    </div>

    <!--------- Cathégories ---------->
    <div class="small-container">
        <h2 class="title">Produits principaux </h2>
        <div class="row">
            <div class="col-4">
                <img src="asset/girophare-1.png">
                <h4>Girophare qualité master Nike</h4>
                <div class="rating">
                    <p>&#9733;&#9733;&#9733;&#9733;&#9733;</p>

                </div>
                <p>49.99 €</p>
            </div>
            <div class="col-4">
                <img src="asset/panneau-1.png">
                <h4>Panneau rare limité Quechua</h4>
                <div class="rating">
                    <p>&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                </div>
                <p>629.99 €</p>
            </div>
            <div class="col-4">
                <img src="asset/porte-cle-1.png">
                <h4>Porte clé solide Gucci edition</h4>
                <div class="rating">
                    <p>&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                </div>
                <p>9.99 €</p>
            </div>
        </div>

    </div>




</body>

</html>