<!-- inclusion de l'entete -->
<?php
//inclusion fichier
include_once "../includes/entete.php";
include_once "../includes/navigation.php";

//recuperer le critere de recherche

$query = $_POST['produit'];
?>
<!--Main layout-->
<main class="pt-5 mx-lg-5 mb-5 pb-5" role="main">
    <div class="container-fluid mt-5">

        <!-- Heading -->
        <div class="card mb-4 wow fadeIn">

            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">

                <h4 class="mb-2 mb-sm-0 pt-1">
                    <a href="<?= $_SESSION['index'];?>">Accueil</a>
                    <span>/</span>
                    <a href="<?= $_SESSION['produit_page'];?>">Produit</a>
                    <span>/</span>
                    <span>Erreur</span>
                </h4>

            </div>

        </div>
        <!-- Heading -->
        <!--Grid row-->
        <div class="row wow fadeIn">

            <!--Grid column-->
            <div class="col-md-12">


                <!-- Heading -->
                <div class="card mb-4 wow fadeIn">

                    <!--Card content-->
                    <div class="card-body d-sm-flex justify-content-between">
                        <h4 class="mb-2 mb-sm-0 pt-1">
                            <span class="text-danger">Une erreur de creation de l'article a ete rencontree. </span>
                            <a href="<?= $_SESSION['base']; ?>produit/ajouter.php"
                               class="btn btn-primary btn-sm" style="border-radius: 20px!important;">Reessayer</a>
                        </h4>
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