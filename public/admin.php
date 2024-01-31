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
            <input type="text" name="product_name" id="product_name" placeholder="Name">
        </div>
        <div>
            <label for="image"></label>
            <input type="file" name="product_image" id="product_image" placeholder="https://example.com" pattern="https://.*" size="30" required>
        </div>
        <div>
            <label for="description"></label>
            <textarea class="description_product" type="text" name="product_description" id="product_description" placeholder="Description"></textarea>
        </div>
        <div>
            <label for="genre"></label>
            <input type="text" name="product_genre" id="product_genre" placeholder="Type">
        </div>
        <div>
            <label for="number"></label>
            <input type="number" name="product_number" id="product_number" placeholder="Number">
        </div>
        <div>
            <button type="submit" name="submit" value="press">Envoyer</button>
        </div>

        <?php

            if (isset($_POST['submit']) && $_POST['submit'] == 'press'){
                //Toutes les informations sont remplies
                if (isset($_POST['product_name']) && isset($_POST['product_image']) && isset($_POST['product_description']) && isset($_POST['product_genre']) && isset($_POST['product_number'])) {
                    echo 'Votre produit est enregistrer dans la BDD';
                }
                else{
                    // Si les infos suivantes ne sont pas remplies par l'admin, cela marque une erreur.
                    echo 'Veuillez rentrer les infos de votre produit';
                }
            }
        ?>
    </form>

</body>



</html>