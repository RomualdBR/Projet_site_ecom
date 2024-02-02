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
}

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
    <?php
    require_once __DIR__ . '/actions/header.php';
    ?>
    <div class="barre_recherche_div">
        <form method="get" style="width: 500px;" class="barre_recherche">
            <span class="productSearch">
                <input type="submit" id="searchButton" style="display: none;">
                <input type="text" name="searchProduct" placeholder="Recherche" class="text_recherche">
            </span>
        </form>
    </div>
    <div class="left">
        <?php
        global $pdo;
        $genreFiltre = isset($_GET['products']) ? $_GET['products'] : '';
        if (!empty($genreFiltre)) {
            $requete = "SELECT * FROM products WHERE genre = '$genreFiltre'";
        } else {
            $requete = "SELECT * FROM products";
        }
        $result = $pdo->prepare($requete);
        $result->execute();
        $rows = $result->fetchAll();
        if (!empty($rows)) {
            foreach ($rows as $row) {
        ?>
                <div class="col-4">
                    <a href="page_product.php?id=<?php echo $row['id'] ?>">
                        <img src="<?= $row['image'] ?>">
                        <h4><?= $row['name'] ?></h4>
                        <p><?= $row['price'] ?> €</p>
                    </a>
                </div>
        <?php
            }
        } else {
            echo "Aucun produit trouvé dans cette catégorie.";
        }
        ?>
        <form method="get">
            <select name="products" id="products">
                <option value="">Tous les produits</option>
                <option value="porte-cle">Porte clé</option>
                <option value="Gyrophare">Gyrophare</option>
                <option value="Panneaux">Panneaux</option>
                <option value="T-Shirt">T-Shirt</option>
            </select>
            <input type="submit" name"filter_button" value="submit" class="submit_filter">
        </form>

    </div>



    <h2 class="allProduct">Tout les produits : </h2>


    <div class="row">
        <?php
        if (isset($_GET['searchProduct'])) :
            foreach (findProduct() as $productFound) :
        ?>
                <div class="col-4">
                    <a href="page_product.php?id=<?php echo $productFound['id'] ?>">
                        <img src="<?= $productFound['image'] ?>">
                        <h4><?= $productFound['name'] ?></h4>
                        <p><?= $productFound['price'] ?> €</p>
                    </a>
                </div>
            <?php
            endforeach;
        else : foreach (getProduct() as $product) :
            ?>
                <div class=" col-4">
                    <a href="page_product.php?id=<?php echo $product['id'] ?>">
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