<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Pizza !</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

    <!-- Main Header -->
    <header id="main-header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <a class="navbar-brand" href="/">
                    <img src="assets/images/logo.png" alt="Web Pizza">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ml-auto">
                        <li class="nav-item">
                            <a class="nav-link " href="/pizzas">Pizzas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/salades">Salades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/desserts">Desserts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/boissons">Boissons</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/menus">Menus</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/mon-compte">Mon Compte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link cart" href="/panier">Panier</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>
    <!-- end #main-header -->

    <!-- Main Content -->
    <div id="main-content">

        <!-- Pizzas Showcase -->
        <section>

            <div id="showcase" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#showcase" data-slide-to="0" class="active"></li>
                    <li data-target="#showcase" data-slide-to="1" class=""></li>
                    <li data-target="#showcase" data-slide-to="2" class=""></li>
                    <li data-target="#showcase" data-slide-to="3" class=""></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active" data-illustration="slide1.jpg"></div>
                    <div class="carousel-item" data-illustration="slide2.jpg"></div>
                    <div class="carousel-item" data-illustration="slide3.jpg"></div>
                    <div class="carousel-item" data-illustration="slide4.png"></div>
                </div>

                <a class="carousel-control-prev" href="#showcase" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#showcase" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </section>


        <!-- Offres Menus -->
        <section id="offers">
            <div class="container">

                <div class="row">
                    <div class="col-12 col-md-6">

                        <div id="wpo1" class="offer-tile offer-tile-large" data-illustration="tile-1.jpg" >
                            <a href="/pizzas"></a>
                        </div>

                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row">
                            <div class="col-6">

                                <div id="wpo2" class="offer-tile offer-tile-small" data-illustration="tile-2.jpg" >
                                    <a href="/salades">
                                        <div class="caption">
                                            <h3 class="title">Salades</h3>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="col-6">

                                <div id="wpo3" class="offer-tile offer-tile-small" data-illustration="tile-3.jpg" >
                                    <a href="/desserts">
                                        <div class="caption">
                                            <h3 class="title">Desserts</h3>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="col-12">

                                <div id="wpo4" class="offer-tile offer-tile-medium" data-illustration="tile-4.jpg">
                                    <a href="/boissons">
                                        <div class="caption">
                                            <h3 class="title">Cappucino<br>&amp; espresso</h3>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
    <!-- end #main-content -->


    <section id="contact">
        <div class="container">
            <form name="contact" class="row" method="post" novalidate>

                <!-- Champ Prénom -->
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Votre Prénom" required>
                    </div>
                </div>

                <!-- Champ Nom -->
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Votre NOM" required>
                    </div>
                </div>

                <!-- Champ Email -->
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Votre adresse e-mail" required>
                    </div>
                </div>

                <!-- Champ Message -->
                <div class="col-12">
                    <div class="form-group">
                        <textarea name="message" class="form-control" id="message" rows="5" placeholder="Votre message" required></textarea>
                    </div>
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-red btn-no-radius btn-upper">Envoyer le message</button>
                </div>

            </form>
        </div>
    </section>


    <!-- Main Footer -->
    <footer id="main-footer">

        <!-- Footer Copyright -->
        <div class="footer-legal">
            <div class="container">
                Copyright &copy;  2019 Web Pizza.
            </div>
        </div>

    </footer>
    <!-- end #main-footer -->

    <!-- JS Library -->
    <script src="assets/js/jquery-3.3.1.slim.min.js" ></script>
    <script src="assets/js/popper.min.js" ></script>
    <script src="assets/js/bootstrap.min.js" ></script>

    <!-- App JS -->
    <script src="assets/js/app.js"></script>

</body>

</html>