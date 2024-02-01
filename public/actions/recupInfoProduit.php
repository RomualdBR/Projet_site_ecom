<?php

function getInfos(): array
{
    $productId = $_GET['id'];
    global $pdo;
    $pdoStatement = $pdo->prepare("SELECT * FROM products WHERE id ='$productId';");
    $pdoStatement->execute();
    $infos = $pdoStatement->fetchAll();
    return $infos;
};
