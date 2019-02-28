<?php include_once "../private/src/views/layout/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-12">

            <h2><?= $pageTitle ?></h2>




            <div class="row">
                <?php foreach($products as $product): ?>
                <div class="col-3">

                    <div class="card">
                        <img class="card-img-top" src="assets/images/<?= $product['illustration'] ?>" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?= $product['name'] ?></h5>
                            <p class="card-text"><?= join(", ", $product['ingredients']) ?></p>
                            <p class="lead"><?= $product['price'] ?> &euro;</p>
                            <a href="/add-to-order?id=<?= $product['id'] ?>" class="btn btn-block btn-success">Ajouter au panier</a>
                        </div>
                    </div>

                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</div>

<?php include_once "../private/src/views/contact/form.php"; ?>
<?php include_once "../private/src/views/layout/footer.php"; ?>