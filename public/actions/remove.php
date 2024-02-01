<?php
require_once __DIR__ . '../../../src/db.php';
require_once __DIR__ . '../../admin.php';


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
            $new_description = $_POST['description'];
            $new_genre = $_POST['genre'];
            $new_quality = $_POST['quality'];

            $modify_row = 'UPDATE products SET name, price, description, genre, quantity WHERE id = :id';
            $stmt=$pdo->prepare($modify_row);
            $stmt->bindParam(":id", $_GET['id']);
            $stmt->execute();
            header('Location: ../admin.php');
        }