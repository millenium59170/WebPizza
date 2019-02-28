
    <section id="contact">
        <div class="container">
            <form name="contact" action="/contact" class="row" method="post" novalidate>

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