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
            <textarea type="text" name="product_description" id="product_description" placeholder="Description"></textarea>
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
            <button type="submit">Envoyer</button>
        </div>

    </form>

</body>



</html>