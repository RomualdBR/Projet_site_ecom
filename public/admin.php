<?php require_once __DIR__ . '/../public/admin.php';
require_once __DIR__ . '/../src/init.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>

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
            <input type="file" name="image" id="product_image" placeholder="https://example.com" pattern="https://.*" size="30">
        </div>
        <div>
            <label for="description"></label>
            <textarea class="description_product" type="text" name="description" id="product_description" placeholder="Description"></textarea>
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

        <?php

            

            if (isset($_POST['submit']) && $_POST['submit'] == 'press'){
                if(empty($_POST['name'])){
                    echo'il manque le nom';
                    die();
                }
                if(empty($_POST['price'])){
                    echo'il manque le nom';
                    die();
                }
                if(empty($_POST['image'])){
                    echo'il manque l'.' image';
                    die();
                }
                if(empty($_POST['description'])){
                    echo'il manque la description';
                    die();
                }
                if(empty($_POST['genre'])){
                    echo'il manque le Type';
                    die();
                }
                if(empty($_POST['quantity'])){
                    echo'il manque le nombre';
                    die();
                }
                //Toutes les informations sont remplies
                if (isset($_POST['name']) && isset($_POST['price']) && isset($_POST['image']) && isset($_POST['description']) && isset($_POST['genre']) && isset($_POST['quantity'])) {
                    echo 'Votre produit est enregistrer dans la BDD';
                    $pdo;
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $description = $_POST['description'];
                    $quantity = $_POST['quantity'];
                    $genre = $_POST['genre'];
                    $pdoStatement = $pdo->prepare("INSERT INTO products (name ,price, description, quantity, genre)
                    VALUES (:name, :price, :description, :quantity, :genre)");
                    $pdoStatement->execute([
                    ':name' => $name,
                    ':price' => $price,
                    ':description' => $description,
                    ':quantity' => $quantity,
                    ':genre' => $genre,
                    ]);
                }
            }
        ?>
    </form>

</body>



</html>