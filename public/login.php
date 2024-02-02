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
<?php
        require_once __DIR__ . '/actions/header.php';
    ?>

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
                                <form id="LoginForm" action="actions/login.php" method="post">
                                    <input type="text" name="username" placeholder="Username">
                                    <input type="password" name="pswrd" placeholder="Password">
                                    <button type="submit" class="btn">Connexion</button>
                                    <a href="">Mot de passe oublié ?</a>
                                </form>
                                <form id="RegForm" action="actions/register.php" method="post">
                                    <input type="text" name="username" placeholder="Username">
                                    <input type="email" name="email" placeholder="Email">
                                    <input type="password" name="pswrd" placeholder="Password">
                                    <button type="submit" class="btn">S'inscrire</button>

                                </form>
                                <?php require_once __DIR__ . '/../src/partials/show_error.php'; ?>
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