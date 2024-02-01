<?php
//require_once __DIR__ . '/products.php';
require_once __DIR__ . '/../src/init.php';



function getInfos(): array
            {
                $productId = $_GET['id'];
                global $pdo;
                $pdoStatement = $pdo->prepare("SELECT * FROM products WHERE id ='$productId';");
                $pdoStatement->execute();
                $infos = $pdoStatement->fetchAll();
                return $infos;
            };
            
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
    <title>Document</title>
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
        </div>
    </div>
    <div class="row">
        <?php
            foreach (getInfos() as $info) :
        ?>
                <div class="col-3">
                    <img src="<?= $info['image'] ?>">
                    <h4><?= $info['name'] ?></h4>
                    <p><?= $info['price'] ?> €</p>
                    <p><?= $info['quantity'] ?> en stock</p>
                </div>
        <?php 
            endforeach;        
        ?>
    </div>

    <a href="panier"><input type="button" name="add" value="Ajouter au panier" class="order"></a>
    <a href=""><input type="button" name="order" value="Commander" class="order"></a>
    
    <p><?= $info['description'] ?></p>
</body>

</html>