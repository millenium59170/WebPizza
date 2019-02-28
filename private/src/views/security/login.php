<?php include_once "../private/src/views/layout/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-4 offset-4">
        
            <h2>Connexion</h2>

            <form class="security-form" method="post">
                
                <!-- Champ email -->
                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Votre adresse email">
                </div>
                
                <!-- Champ Mot de passe -->
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Votre nouveau mot de passe">
                </div>

                <button class="btn btn-success btn-block">Connexion</button>

            </form>


            <div class="form-link">
                <a href="/inscription">Je n'ai pas encore de compte</a><br>
                <a href="/mot-de-passe-oublie">J'ai oublié mon mon de passe</a>
            </div>
        
        </div>
    </div>
</div>

<?php include_once "../private/src/views/layout/footer.php"; ?>