<?php

$title = 'Accueil - La Chouette Coin';
require 'includes/header.php';

if (!empty($_POST['email_signup']) && !empty($_POST['password1_signup']) && !empty($_POST['username_signup']) && isset($_POST['submit_signup'])) {
    $email = htmlspecialchars($_POST['email_signup']);
    $password1 = htmlspecialchars($_POST['password1_signup']);
    $password2 = htmlspecialchars($_POST['password2_signup']);
    $username = htmlspecialchars($_POST['username_signup']);

    if (inscription($email, $username, $password1, $password2)) {
        echo "L'utilisateur a bien été enregistrer";
    }
} elseif (!empty($_POST['email_login']) && !empty($_POST['password_login']) && isset($_POST['submit_login'])) {
    $email = strip_tags($_POST['email_login']);
    $password = strip_tags($_POST['password_login']);

    connexion($email, $password);
    var_dump($_POST);
} else {
    if (isset($_POST)) {
        unset($_POST);
    }
}
?>

<div class="row">
    <div class="col-6">
        <h3>S'inscrire</h3>
        <form
            action="<?php $_SERVER['REQUEST_URI']; ?>"
            method="POST">
            <div class="form-group">
                <label for="email_signup">Adresse email</label>
                <input type="email" class="form-control" id="email_signup" aria-describedby="emailHelp"
                    name="email_signup" required>
                <small id="emailHelp" class="form-text text-muted">Nom d'utilisateur</small>
            </div>

            <div class="form-group">
                <label for="username_signup">Uername</label>
                <input type="text" class="form-control" id="username_signup" aria-describedby="userHelp"
                    name="username_signup" required>
                <small id="textHelp" class="form-text text-muted">Choisissez un nom d'utilisateur, il doit être
                    unique</small>
            </div>
            <div class="form-group">
                <label for="password1_signup">Choisissez un mot de passe</label>
                <input type="password" class="form-control" id="password1_signup" name="password1_signup" required>
            </div>

            <div class="form-group">
                <label for="password2_signup">Entrez votre mot de passe de nouveau</label>
                <input type="password" class="form-control" id="password2_signup" name="password2_signup" required>
            </div>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="Check1" required>
                <label class="form-check-label" for="Check1">Accepter les <a href="#">termes et conditions</a></label>
            </div>
            <button type="submit" class="btn btn-primary" name="submit_signup">Submit</button>
        </form>
    </div>

    <div class="col-6">
        <h3>Se connecter</h3>
        <form
            action="<?php $_SERVER['REQUEST_URI']; ?>"
            method="POST">


            <div class="form-group">
                <label for="email_login">Adresse email</label>
                <input type="email" class="form-control" id="email_login" aria-describedby="emailHelp"
                    name="email_login" required>
                <small id="emailHelp" class="form-text text-muted">Nous ne partegerons jamais votre email avec qui que
                    ce
                    soit</small>
            </div>

            <!-- <div class="form-group">
            <label for="InputUsername">Nom d'utilisateur</label>
            <input type="text" class="form-control" id="InputUsername" aria-describedby="userHelp" name="username_login"
                required>
            <small id="usernameHelp" class="form-text text-muted">Saisissez votre nom d'utilisateur</small>
        </div> -->
            <div class="form-group">
                <label for="password_login">Choisissez un mot de passe</label>
                <input type="password" class="form-control" id="password_login" name="password_login" required>
                <small id="passwordHelp" class="form-text text-muted">Saisissez votre mot de passe</small>
            </div>

            <button type="submit" class="btn btn-primary" name="submit_login">Submit</button>

        </form>
    </div>
</div>