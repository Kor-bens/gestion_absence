<?php
//Classe

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('src/view/head.php') ?>
</head>

<body>
    <?php require_once('nav.php') ?>
    <section class="page-section" id="contact">
        <div class="container mt-5">

            <!-- Contact Section Form-->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">


                    <form id="contactForm" action="inscription" method="post">

                        <?php if (isset($message)) { ?>
                            <div class="alert alert-danger" id="message">
                                <p><?= $message ?></p>
                            </div>
                        <?php }
                        ?>
                        <label for="file" class=" mt-1 fs-5 text-secondary">Sélectionner une image :</label>
                        <div class="form-floating mb-3">
                            <input type="file" name="file" id="file">
                        </div>
                        <label for="civilite" class=" mt-3 fs-5 text-secondary">Civilite</label>
                        <div class="form-floating mb-3">
                            <select class="form-select" name="civilite" aria-label="Default select example">
                                <option value="Mr">Mr</option>
                                <option value="Mme">Mme</option>
                                <option value="autre"></option>
                            </select>
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" name="nom" type="text" placeholder="Entrez votre nom" data-sb-validations="required" data-sb-can-submit="no">
                            <label for="name">Nom</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">Un nom est requis</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="prenom" name="prenom" type="text" placeholder="Entrez votre prenom" data-sb-validations="required" data-sb-can-submit="no">
                            <label for="prenom">prenom</label>
                            <div class="invalid-feedback" data-sb-feedback="prenom:required">Un prenom est requis.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="date_naissance" name="date_naissance" type="date" placeholder="Entrez votre date de naissance" data-sb-validations="required" data-sb-can-submit="no">
                            <label for="date_naissance">Date de naissance</label>
                            <div class="invalid-feedback" data-sb-feedback="date de naissance:required">Une date de naissance est requise</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="nombre_enfant" name="nombre_enfant" type="number" placeholder="Entrez votre nom" data-sb-validations="required" data-sb-can-submit="no">
                            <label for="nombre_enfant">Nombre d'enfant</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">Un nom est requis</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" name="email" placeholder="name@example.com" data-sb-validations="required,email" data-sb-can-submit="no">
                            <label for="email">Adresse mail</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">Un email est requis.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email_confirm" type="email" name="email_confirm" placeholder="name@example.com" data-sb-validations="required,email" data-sb-can-submit="no">
                            <label for="email_confirm">Confirmation d'adresse mail</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">Un email est requis.</div>

                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="mdp" type="password" name="password" placeholder="Entrez votre mot de passe" data-sb-validations="required" data-sb-can-submit="no">
                            <label for="mdp">Mot de passe</label>
                            <div class="invalid-feedback" data-sb-feedback="mdp:required">Un mot de passe est requis.</div>
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" id="mdp_confirm" type="password" name="password_confirm" placeholder="Confirmez votre mot de passe" data-sb-validations="required" data-sb-can-submit="no">
                            <label for="mdp_confirm">Confirmez votre mot de passe</label>
                            <div class="invalid-feedback" data-sb-feedback="mot de passe:required">Un mot de passe est requis.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="number" name="telephone" placeholder="(123) 456-7890" data-sb-validations="required" data-sb-can-submit="no">
                            <label for="phone">Numero de telephone</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>
                        <!-- fonction-->
                        <label for="statut" class=" mt-3 fs-5 text-secondary">Fonction</label>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="statut" name="fonction" aria-label="Default select example">
                                <?php ?>
                                <?php foreach ($fonctions as $fonction) { ?>
                                    <option value="<?= $fonction->id ?>"><?= $fonction->nom ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="id_pers" name="id_pers" type="text" placeholder="Code OSIA" data-sb-validations="required" data-sb-can-submit="no">
                            <label for="id_pers">Code OSIA / Agent</label>
                            <div class="invalid-feedback" data-sb-feedback="osia:required">Un code OSIA est requis.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <label for="offre" class="form-floating mb-3">Offre</label>
                        </div>
                        <label for="select" class=" mt-1 fs-5 text-secondary">Offre</label>
                        <div class="form-floating mb-3">
                            <select class="form-select" name="offre" aria-label="Default select example">
                                <option selected>Selectionner une offre</option>
                                <?php foreach ($offres as $offre) { ?>
                                    <option value="<?= $offre->getId() ?>"><?= $offre->getLibelle() ?></option>

                                <?php } ?>

                            </select>
                        </div>

                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br>
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <!-- Submit Button-->
                        <button class="btn btn-primary btn-xl disable pe-auto" id="submitButton" type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
    if (isset($messageErr)) {
        foreach ($messageErr as $err) {
    ?>
            <div class="alert alert-danger" role="alert"><?= $err ?></div>
    <?php }
    } ?>

    <?php require('footer.php') ?>

</body>

</html>