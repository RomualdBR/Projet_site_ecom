<?php
require_once __DIR__ . '/../../src/init.php';

$productPanier = $_GET['id'];
$st1 = $pdo->prepare("DELETE FROM panier WHERE id ='$productPanier';");
$st1->execute();
$result = $st1->fetchAll();
header('Location: /panier.php');
die();
