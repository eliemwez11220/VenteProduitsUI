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
                    <span>Recherche</span>
                </h4>

                <form class="d-flex justify-content-center" method="post"
                      action="<?= $_SESSION['produit_url'];?>produit/rechercher.php">
                    <!-- Default input -->
                    <div class="input-group">
                        <input type="text" placeholder="Rechercher un produit" aria-label="Search"
                               class="form-control" value="<?= $query; ?>">
                        <div class="input-group-prepend">
                            <button class=" input-group-text btn-sm my-0 primary-color white-text" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

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
                            <span>Resultat de Recherche sur le critere - <span class="blue-text"><?= $query; ?></span></span>
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