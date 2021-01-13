<!-- inclusion de l'entete -->
<?php
//inclusion fichier
include_once "../includes/entete.php";
include_once "../includes/navigation.php";

?>
<!--Main layout-->
<main class="pt-5 mx-lg-5 mb-5 pb-5" role="main">
    <div class="container-fluid mt-5">

        <!-- Heading -->
        <div class="card mb-4 wow fadeIn">

            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">

                <h4 class="mb-2 mb-sm-0 pt-1">
                    <a href="<?= $_SESSION['index']; ?>">Accueil</a>
                    <span>/</span>
                    <a href="<?= $_SESSION['produit_page']; ?>">Produit</a>
                    <span>/</span>
                    <span>ajout nouvel article</span>
                </h4>
                <div class="text-right">
                    <a href="<?= $_SESSION['produit_page']; ?>"
                       class="btn btn-sm my-0 btn-danger white-text" style="border-radius: 20px!important;">Revenir a la liste Articles</a>
                </div>

            </div>

        </div>
        <!-- Heading -->
        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-12">


                <!-- Heading -->
                <div class="card mb-4">

                    <!--Card content-->
                    <div class="card-body">
                        <form action="<?= $_SESSION['produit_url']; ?>add.php" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Titre de l'article" name="txt_titre"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Auteur de l'article" name="txt_auteur"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-1 pt-1">
                                    <div class="form-group">
                                    <textarea type="text" placeholder="Description de l'article" name="txt_contenu"
                                              class="form-control" rows="10" cols="30"></textarea>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-sm my-0 btn-primary white-text" type="submit" style="border-radius: 20px!important;">
                                        Enregistrer cet article
                                    </button>
                                    <button onclick="return confirm('Voulez-vous vraiment annuler la publication de cet article ?')"
                                            class="btn btn-sm my-0 btn-danger white-text" type="reset" style="border-radius: 20px!important;">
                                        Annuler cet article
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- Heading -->
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </div>
</main>
<!--Main layout-->

<!-- inclusion du pied de page -->

<?php include_once "../includes/pied.php"; ?>