<?php

$title = 'Accueil - La Chouette Coin';
require 'includes/header.php';
?>

<div class="container text-center">
    <div class="row">
        <div class="jumbotron-fluid">
            <div class="container">
                <h1 class="display-3"> Bienvenue sur le chouette coin</h1>
                <h3 class="lead">Votre site d'annonces entre particuliers</h3>
                <a href="signin.php" class="btn btn-primary">Se connecter !</a>
            </div>
        </div>
    </div>
</div>

<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">email</th>
            <th scope="col">username</th>
            <th scope="col">hashed password</th>
        </tr>
    </thead>
    <tbody>
        <?php
            affichage();
        ?>
    </tbody>
</table>

<?php
require 'includes/footer.php';
