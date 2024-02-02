<?php
require_once __DIR__ . '/../../src/init.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>

    <nav>
        <ul>
            <li><a href="home.php">Accueil</li></a>
            <li><a href="products.php">Produits</li></a>
            <li><a href="">À propos</li></a>
            <li><a href="">Contact</li></a>
            <li><a href="login.php">Connexion</li></a>
            <li><a href="admin.php">Admin</li></a>
        </ul>
        <img src="../assets/bootstrap-5.3.2-dist/img/shopping-bag.png" width="30px" height="30px">
    </nav>
</html>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $select_row = "SELECT * FROM products WHERE id = :id";
    $stmt = $pdo->prepare($select_row);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Admin</title>
</head>
<body>
    <h2>Modifier le produit</h2>
    <form action='modify.php' method='post'>
        <input type='hidden' name='id' value='<?php echo $row["id"]; ?>'>
        <label>Nouveau Nom:</label>
        <input type='text' name='new_name' value='<?php echo $row["name"]; ?>'>
        <label>Nouveau prix:</label>
        <input type='text' name='new_price' value='<?php echo $row["price"]; ?>'>
        <label>Nouvelle description:</label>
        <input type='text' name='new_description' value='<?php echo $row["description"]; ?>'>
        <label>Nouveau genre:</label>
        <input type='text' name='new_genre' value='<?php echo $row["genre"]; ?>'>
        <label>Nouvelle quantité:</label>
        <input type='text' name='new_quantity' value='<?php echo $row["quantity"]; ?>'>
        <label>Nouvelle image:</label>
        <input type='text' name='new_image' value='<?php echo $row["image"]; ?>'>
        <input type='submit' value='Enregistrer'>
    </form>
</body>
</html>
<?php
} else {
    echo "BLABLACAR.";
}
?>
