<?php
include_once __DIR__ . '/../src/init.php';

function getProduct(): array
{
    global $pdo;
    $st1 = $pdo->prepare('SELECT * FROM products');
    $st1->execute();
    $products = $st1->fetchAll();
    return $products;
};
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
                        <li><a href="">Contact</li></a>
                        <li><a href="login.php">Connexion</li></a>
                        <li><a href="admin.php">Admin</li></a>
                    </ul>
                    <img src="assets/bootstrap-5.3.2-dist/img/shopping-bag.png" width="30px" height="30px">
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
                    <img src="assets/bootstrap-5.3.2-dist/img/panneau-accueil.png" "  alt=" panneau">
                </div>

            </div>
        </div>
    </div>

    <!--------- Cathégories ---------->
    <div class="small-container">
        <h2 class="title">Produits principaux </h2>
        <div class="row">
            <?php
            foreach (getProduct() as $product) :
            ?>
                <div class="col-4">
                    <img src="assets/bootstrap-5.3.2-dist/img/girophare-1.png">
                    <h4><?= $product['pname'] ?></h4>
                    <div class="rating">
                        <p>&#9733;&#9733;&#9733;&#9733;&#9733;</p>

                    </div>
                    <p><?= $product['price'] ?> €</p>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</body>

</html>