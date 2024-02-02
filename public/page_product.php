<?php
//require_once __DIR__ . '/products.php';
require_once __DIR__ . '/../src/init.php';
require_once __DIR__ . '/actions/recupInfoProduit.php';
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

<?php
        require_once __DIR__ . '/actions/header.php';
    ?>
    <div class="row">
        <?php
        foreach (getInfos() as $info) :
        ?>
            <div class="col-3">
                <img src="<?= $info['image'] ?>">
                <h4><?= $info['name'] ?></h4>
                <p><?= $info['price'] ?></p>
                <p><?= $info['quantity'] ?> en stock</p>
            </div>
        <?php
        endforeach;
        ?>
    </div>

    <form action="ajoutPanier.php" method="get">
        <a href="actions/ajoutPanier.php?id=<?php echo $info['id'] ?>"><input type="button" name="add" value="Ajouter au panier" class="order"></a>
        <a href=""><input type="button" name="order" value="Commander" class="order"></a>
    </form>

    <p><?= $info['description'] ?></p>
</body>

</html>