<?php include_once "../private/src/views/layout/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-12">

            <h2>Mon compte</h2>

            <div class="row">
                <div class="col-3">Prénom & Nom</div>
                <div class="col-9">
                <?= $_SESSION['user']['fullname'] ?>
                </div>
            </div>

            <div class="row">
                <div class="col-3">Email</div>
                <div class="col-9">
                    <?= $_SESSION['user']['email'] ?>
                </div>
            </div>

            <div class="row">
                <div class="col-3">Mot de passe</div>
                <div class="col-9">
                    <a href="#">Modifier mon mot de passe</a>
                </div>
            </div>

            <hr>

            <h3>Mes commandes</h3>
            
            <ul class="list-unstyled">
                <li>liste des commandes...</li>
            </ul>

        </div>
    </div>
</div>

<?php include_once "../private/src/views/layout/footer.php"; ?>