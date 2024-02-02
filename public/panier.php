<?php
include_once __DIR__ . '/../src/init.php';
require_once __DIR__ . '/actions/recupInfoProduit.php';

function getPanier()
{
    global $pdo;
    $st1 = $pdo->prepare('SELECT * FROM panier;');
    $st1->execute();
    $result = $st1->fetchAll();
    return $result;
}

?>

<!DOCTYPE html>
<html lang="en">

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
                        <a href="panier.php"><img src="assets/bootstrap-5.3.2-dist/img/shopping-bag.png" width="30px" height="30px"></a>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div id="main_panier">
        <div id="listePanier">
            <?php
            foreach (getPanier() as $panierInfo) :
            ?>
                <table>
                    <tr>
                        <th><img src="<?= $panierInfo['image'] ?>" alt="image de <?= $panierInfo['name'] ?>" class="img_panier"></th>
                        <td><?= $panierInfo['name'] ?> </td>
                        <td>Quantité <?= $panierInfo['quantity'] ?> </td>
                        <td><?= $panierInfo['price'] ?> €</td>
                        <td>
                            <a href="actions/suppPanier.php?id=<?php echo $panierInfo['id'] ?>"><input type="submit" value="Supprimer"></a>
                        </td>
                    </tr>
                </table>

            <?php endforeach; ?>

        </div>
        <div id="validerPanier">
            <button class="bouton_commande">
                Passer Commande
            </button>
        </div>
    </div>

</body>

</html>