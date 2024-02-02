<?php
require_once __DIR__ . '/../../src/init.php';

if (isset($_POST['new_name'], $_POST['new_price'], $_POST['new_description'], $_POST['new_genre'], $_POST['new_quantity'], $_POST['new_image'],  $_POST['id'])) {
    $new_name = $_POST['new_name'];
    $new_price = $_POST['new_price'];
    $new_description = $_POST['new_description'];
    $new_genre = $_POST['new_genre'];
    $new_quantity = $_POST['new_quantity'];
    $new_image = $_POST['new_image'];
    $id = $_POST['id'];

    $modify_row = 'UPDATE products SET name=:name, price=:price, description=:description, genre=:genre, quantity=:quantity, image=:image WHERE id = :id';
    $stmt = $pdo->prepare($modify_row);
    $stmt->bindParam(":name", $new_name);
    $stmt->bindParam(":price", $new_price);
    $stmt->bindParam(":description", $new_description);
    $stmt->bindParam(":genre", $new_genre);
    $stmt->bindParam(":quantity", $new_quantity);
    $stmt->bindParam(":image", $new_image);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    header('Location: /../admin.php ');
    exit();
} else {
    echo "Données manquantes AKHY.";
}
?>
