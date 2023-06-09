<?php
$title = 'Odyssée :: Inscription';
require 'inc/head.php';
require 'inc/nav.php';
?>
    <div class="image"> <img src="../odyssee/assets/img/logo.png"></img></div>
        <div class="container">
            <div class="card">
                <div class="title">
                    <h1 class="txt-center">Odyssée</h1>
                    <p class="txt-center">Game Cards entrez dans l'univers de l'aventure </p>
                </div>
                    <div class="group">
                        <form action="send.php" method="post">
                            <div class="form-group">
                                <label for="">Nom</label>
                                <input type="text" id="name" >
                            </div>
                            <div class="form-group">
                                <label for="">Prénom</label>
                                <input type="text"id="firstname">
                            </div>
                            <div class="form-group">
                                <label for="birth">Date de naissance</label>
                                <input type="date"id="birth" name="birth" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email"placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe</label>
                                <input type="password" id="password" name="password" minlength="8"maxlength="16"required>
                            </div>
                            <div class="form-group">
                                <label for="">Confirmez le mot de passe</label>
                                <input type="text">
                            </div>
                            <input type="submit" name="submit" class="btn" value="Sign up">
                            <p class="txt-center under">Vous êtes déjà inscrit ?<a href="Connexion.html">Cliquez-ici</a></p>
                        </form>
                    </div>
            </div>
        </div>
    
</body>
</html>