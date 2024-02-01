<?php
$table_panier = "SELECT id, name, price, genre, quantity FROM products";
    $result_panier = $pdo->query($table_panier);
?>