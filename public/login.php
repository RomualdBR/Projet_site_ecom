<?php
require_once __DIR__ . '/../src/init.php';
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Bazar-shop | e-commerce</title>
    <link href="style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
</head>

<body>
    <div class="header">
        <div class="containerNavigation">
            <div class="navbar">
                <div class="logo">
                    <img src="assets/bootstrap-5.3.2-dist/img/logo.png" width="100px" alt="logo">
                </div>
                <nav>
                    <ul>
                        <li><a href="home.php">Accueil</li></a>
                        <li><a href="products.php">Produits</li></a>
                        <li><a href="">À propos</li></a>
                        <li><a href="admin.php">Admin</li></a>
                        <li><a href="login.php">Connexion</li></a>
                    </ul>
                    <img src="assets/bootstrap-5.3.2-dist/img/shopping-bag.png" width="30px" height="30px">
                </nav>
            </div>

            <!-- Account page -->

            <div class="account-page">
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            <img src="assets/bootstrap-5.3.2-dist/img/panneau-accueil.png" width="100%">
                        </div>
                        <div class="col-2">
                            <div class="form-container">
                                <div class="form-btn">
                                    <span onclick="login()">Connexion</span>
                                    <span onclick="register()">S'inscrire</span>
                                    <hr id="Indicator">
                                </div>
                                <form id="LoginForm">
                                    <input type="text" placeholder="Username">
                                    <input type="password" placeholder="Password">
                                    <button type="submit" class="btn">Connexion</button>
                                    <a href="">Mot de passe oublié ?</a>
                                </form>
                                <form id="RegForm">
                                    <input type="text" placeholder="Username">
                                    <input type="email" placeholder="Email">
                                    <input type="password" placeholder="Password">
                                    <button type="submit" class="btn">S'inscrire</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--JS login et register-->
            <script>
                var LoginForm = document.getElementById("LoginForm")
                var RegForm = document.getElementById("RegForm")
                var Indicator = document.getElementById("Indicator")

                function register() {
                    RegForm.style.transform = "translateX(0px)";
                    LoginForm.style.transform = "translateX(0px)";
                    Indicator.style.transform = "translateX(100px)";
                }

                function login() {
                    RegForm.style.transform = "translateX(300px)";
                    LoginForm.style.transform = "translateX(300px)";
                    Indicator.style.transform = "translateX(0px)";
                }
            </script>
</body>

</html>