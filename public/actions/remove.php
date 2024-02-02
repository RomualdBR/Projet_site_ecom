<?php
require_once __DIR__ . '/../../src/db.php';

if(isset($_POST['delete_table']))
{
    $delete_row = 'DELETE FROM products WHERE id = :id';
    $stmt=$pdo->prepare($delete_row);
    $stmt->bindParam(":id", $_GET['id']);
    $stmt->execute();
    header('Location: ../admin.php');
}

?>