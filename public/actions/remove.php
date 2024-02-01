<?php
require_once __DIR__ . '/../../src/db.php';
// require_once __DIR__ . '/../../public/admin.php';


if(isset($_POST['delete_table']))
{
    $delete_row = 'DELETE FROM products WHERE id = :id';
    $stmt=$pdo->prepare($delete_row);
    $stmt->bindParam(":id", $_GET['id']);
    $stmt->execute();
    header('Location: ../admin.php');
}

if(isset($_POST['alter_table']))
{
    $new_name = $_POST['name'];
    $new_price = $_POST['price'];
    $new_image = $_POST['image'];
    $new_description = $_POST['description'];
    $new_genre = $_POST['genre'];
    $new_quality = $_POST['quality'];

    $modify_row = 'UPDATE products SET name, price, image, description, genre, quantity WHERE id = :id';
    $stmt=$pdo->prepare($modify_row);
    $stmt->bindParam(":name", $_GET['new_name']);
    $stmt->bindParam(":price", $_GET['new_price']);
    $stmt->bindParam(":image", $_GET['new_image']);
    $stmt->bindParam(":description", $_GET['new_description']);
    $stmt->bindParam(":genre", $_GET['new_genre']);
    $stmt->bindParam(":quality", $_GET['new_quality']);
    $stmt->execute();
    
    $modify_row = 'SELECT * FROM products WHERE id = :id';
    $stmt=$pdo->prepare($modify_row);
    $stmt->bindParam(":id", $_GET['id']);
    $stmt->execute();
    $stmt=$row->fetch(PDO::FETCH_ASSOC);
}

?>