<?php
require_once __DIR__ . '/actions/remove.php';
require_once __DIR__ . '/../src/init.php';
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

    <?php
    require_once __DIR__ . '/actions/header.php';
    ?>

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
            <div>
                <button type="submit" name="submit" value="press">Envoyer</button>
            </div>

        </form>
    </a>

    <?php

    $table_admin = "SELECT id, name, price, image, description, genre, quantity FROM products";
    $result_admin = $pdo->query($table_admin);

    if ($result_admin->rowCount() > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Id</th><th>Name</th><th>Price</th><th>Image</th><th>Description</th><th>genre</th><th>quantity</th></tr>";
        while ($row = $result_admin->fetch(PDO::FETCH_ASSOC)) {
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