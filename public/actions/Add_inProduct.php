<?php
require_once __DIR__ . '/../../src/init.php';
ob_start();


    if (isset($_POST['submit']) && $_POST['submit'] == 'press') {
        if (empty($_POST['name'])) {
            header('Location: /admin.php?error=1');
            ob_end_flush();
            echo 'il manque le nom';
            die();
        }
        if (empty($_POST['price'])) {
            header('Location: /admin.php?error=2');
            ob_end_flush();
            echo 'il manque le nom';
            die();
        }
        if (empty($_POST['image'])) {
            header('Location: /admin.php?error=3');
            ob_end_flush();
            echo 'il manque l' . ' image';
            die();
        }
        if (empty($_POST['description'])) {
            header('Location: /admin.php?error=4');
            ob_end_flush();
            echo 'il manque la description';
            die();
        }
        if (empty($_POST['genre'])) {
            header('Location: /admin.php?error=5');
            ob_end_flush();
            echo 'il manque le Type';
            die();
        }
        if (empty($_POST['quantity'])) {
            header('Location: /admin.php?error=6');
            ob_end_flush();
            echo 'il manque le nombre';
            die();
        }
        
        
        if (isset($_POST['name']) && isset($_POST['price']) && isset($_POST['image']) && isset($_POST['description']) && isset($_POST['genre']) && isset($_POST['quantity'])) {
            echo 'Votre produit est enregistrer dans la BDD';
            $pdo;
            $name = $_POST['name'];
            $price = $_POST['price'];
            $image = $_POST['image'];
            $description = $_POST['description'];
            $quantity = $_POST['quantity'];
            $genre = $_POST['genre'];

            $pdoStatement = $pdo->prepare("INSERT INTO products (name ,price, image, description, quantity, genre)
                VALUES (:name, :price, :image, :description, :quantity, :genre)");

            $pdoStatement->execute([
                ':name' => $name,
                ':price' => $price,
                ':image' => $image,
                ':description' => $description,
                ':quantity' => $quantity,
                ':genre' => $genre,
            ]);
            header('Location: /admin.php');
            ob_end_flush();
            die();
        }
    }
?>