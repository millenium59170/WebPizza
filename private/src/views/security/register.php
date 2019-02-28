<?php include_once "../private/src/views/layout/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-4 offset-4">
        
            <h2>Inscription</h2>

            <form class="security-form" method="post">
            
                <!-- Champ Prénom -->
                <div class="form-group">
                    <input class="form-control" type="text" name="firstname" placeholder="Votre prénom" value="<?= $firstname ?>">
                </div>
                
                <!-- Champ Nom -->
                <div class="form-group">
                    <input class="form-control" type="text" name="lastname" placeholder="Votre nom" value="<?= $lastname ?>">
                </div>
                
                <!-- Champ email -->
                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Votre adresse email" value="<?= $email ?>">
                </div>
                
                <!-- Champ Mot de passe -->
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Votre nouveau mot de passe">
                </div>

                <button class="btn btn-success btn-block">Valider</button>
            
            </form>

            <div class="form-link">
                <a href="/connexion">J'ai déja un compte</a>
            </div>
        
        </div>
    </div>
</div>

<?php include_once "../private/src/views/layout/footer.php"; ?>