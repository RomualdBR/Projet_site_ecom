<?php
require_once __DIR__ . '/actions/remove.php';
require_once __DIR__ . '/../src/db.php';
require_once __DIR__ . '/../public/actions/Add_inProduct.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>

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

    <a>
        <h1>
            Ajoutez un produit
        </h1>

        <form action="" method="post">
            <div>
                <label for="name"></label>
                <input type="text" name="name" id="product_name" placeholder="Name">
            </div>
            <div>
                <label for="price"></label>
                <input type="text" name="price" id="product_price" placeholder="Prix">
            </div>
            <div>
                <label for="image"></label>
                <input type="text" name="image" id="product_image" placeholder="https://example.com" pattern="https://.*" size="30">
            </div>
            <div>
                <label for="description"></label>
                <input class="description_product" type="text" name="description" id="product_description" placeholder="Description">
            </div>
            <div>
                <label for="genre"></label>
                <input type="text" name="genre" id="product_genre" placeholder="Type">
            </div>
            <div>
                <label for="number"></label>
                <input type="number" name="quantity" id="product_number" placeholder="Number">
            </div>
            </html>
            <div>
                <a href="/public/actions/Add_inProduct.php"><button type="submit" name="submit" value="press" >Envoyer</button></a>
            </div>



<?php


?>
    </form>
</a>

    <?php

    $table_admin = "SELECT id, name, price, image, description, genre, quantity FROM products";
    $result_admin = $pdo->query($table_admin);

    if ($result_admin->rowCount() > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Id</th><th>Name</th><th>Price</th><th>Image</th><th>Description</th><th>genre</th><th>quantity</th></tr>";
        foreach ($result_admin as $row) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
            echo "<td>" . $row["image"] . "</td>";
            echo "<td>" . $row["description"] . "</td>";
            echo "<td>" . $row["genre"] . "</td>";
            echo "<td>" . $row["quantity"] . "</td>";
            echo "<td><form action='actions/remove.php?id=" . $row['id'] . "' method='post'><input type='submit' name='delete_table' value='Supprimer' id=" . $row["id"] . "></input></form></td>";
            echo "<td><form action='actions/modify_table.php?id=" . $row['id'] . "' method='post'><input type='submit' name='alter_table' value='Modifier' id=" . $row["id"] . "></input></form></td>";
            echo "</tr>";
        }
        echo "</table>";
        
    } else {
        echo "Aucun résultat trouvé.";
    }

    ?>
</body>
</html>