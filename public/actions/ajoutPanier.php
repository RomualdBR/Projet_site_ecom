<?php
require_once __DIR__ . '/../../src/init.php';
require_once __DIR__ . '/recupInfoProduit.php';

$info = getInfos();
global $pdo;
$st2 = $pdo->prepare('INSERT INTO panier(name,image,quantity,price)
    VALUES (:name,:image,:quantity,:price);');
$st2->execute([
    ':name' => $info[0]['name'],
    ':image' => $info[0]['image'],
    ':quantity' => $info[0]['quantity'],
    ':price' => $info[0]['price'],
]);
$result = $st2->fetchAll();
header('Location: /panier.php');
die();
