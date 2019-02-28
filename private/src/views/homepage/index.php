<?php include_once "../private/src/views/layout/header.php"; ?>

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


<?php include_once "../private/src/views/contact/form.php"; ?>
<?php include_once "../private/src/views/layout/footer.php"; ?>