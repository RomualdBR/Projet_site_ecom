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

function findProduct(): array
{

    global $pdo;
    $pdostatement = $pdo->prepare('SELECT * FROM products
    WHERE name LIKE :object;');
    $pdostatement->execute([":object" => "%" . $_GET['searchProduct'] . "%"]);
    $result = $pdostatement->fetchAll();
    return $result;
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
                <form method="get" style="width: 500px;">
                    <span class="productSearch">
                        <input type="submit" id="searchButton" style="display: none;">
                        <input type="text" name="searchProduct" placeholder="Recherche">
                    </span>
                </form>
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
        </div>
    </div>

    <div class="row">

        <?php
        if (isset($_GET['searchProduct'])) :
            foreach (findProduct() as $productFound) :
        ?>
                <div class="col-4">
                    <img src="<?= $productFound['image'] ?>">
                    <h4><?= $productFound['name'] ?></h4>
                    <p><?= $productFound['price'] ?> €</p>
                </div>
            <?php
            endforeach;
        else : foreach (getProduct() as $product) :
            ?>
                <div class=" col-4">
                    <a href="page_product.php">
                        <img src="<?= $product['image'] ?>">
                        <h4><?= $product['name'] ?></h4>
                        <p><?= $product['price'] ?> €</p>
                    </a>
                </div>
        <?php
            endforeach;
        endif
        ?>
    </div>



</body>

</html>