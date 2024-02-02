<?php
require_once __DIR__ . '/../../src/init.php';


if (isset($_SESSION['id']) && $_SESSION['id'] == 1) :

?>

    <div class="header">
        <div class="containerNavigation">
            <div class="navbar">
                <div class="logo">
                    <img src="assets/bootstrap-5.3.2-dist/img/logo.png" width="100px" alt="logo">
                </div>
                <nav>

                    <ul>
                        <li> <?php
                                if (isset($_SESSION['id'])) {
                                    echo $_SESSION['username'];
                                } else {
                                    echo 'not connected';
                                } ?></li>
                        <li><a href="home.php">Accueil</li></a>
                        <li><a href="products.php">Produits</li></a>
                        <li><a href="">À propos</li></a>
                        <li><a href="/actions/logout.php">Logout</li></a>
                        <li><a href="admin.php">Admin</li></a>
                        <a href="panier.php"><img src="assets/bootstrap-5.3.2-dist/img/shopping-bag.png" width="30px" height="30px"></a>
                    </ul>
            </div>
        </div>
    </div>
<?php

elseif (empty($_SESSION['id'])) :


?>

    <div class="header">
        <div class="containerNavigation">
            <div class="navbar">
                <div class="logo">
                    <img src="assets/bootstrap-5.3.2-dist/img/logo.png" width="100px" alt="logo">
                </div>
                <nav>

                    <ul>
                        <li> <?php
                                if (isset($_SESSION['id'])) {
                                    echo $_SESSION['username'];
                                } else {
                                    echo 'not connected';
                                } ?></li>
                        <li><a href="home.php">Accueil</li></a>
                        <li><a href="products.php">Produits</li></a>
                        <li><a href="">À propos</li></a>
                        <li><a href="login.php">Connexion</li></a>
                        <a href="panier.php"><img src="assets/bootstrap-5.3.2-dist/img/shopping-bag.png" width="30px" height="30px"></a>
                    </ul>
            </div>
        </div>
    </div>




<?php

elseif (isset($_SESSION['id']) && $_SESSION['id'] >= 2) :

?>

    <div class="header">
        <div class="containerNavigation">
            <div class="navbar">
                <div class="logo">
                    <img src="assets/bootstrap-5.3.2-dist/img/logo.png" width="100px" alt="logo">
                </div>
                <nav>

                    <ul>
                        <li> <?php
                                if (isset($_SESSION['id'])) {
                                    echo $_SESSION['username'];
                                } else {
                                    echo 'not connected';
                                } ?></li>
                        <li><a href="home.php">Accueil</li></a>
                        <li><a href="products.php">Produits</li></a>
                        <li><a href="">À propos</li></a>
                        <li><a href="/actions/logout.php">logout</li></a>
                        <a href="panier.php"><img src="assets/bootstrap-5.3.2-dist/img/shopping-bag.png" width="30px" height="30px"></a>
                    </ul>
            </div>
        </div>
    </div>

<?php
endif;


?>