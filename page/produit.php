<!-- inclusion de l'entete -->
<?php
//include
include_once "../includes/entete.php";
include_once "../includes/navigation.php";


//database
include '../db/database.php';

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
                    <span>Produit</span>
                </h4>

                <form class="d-flex justify-content-center" method="post"
                      action="<?= $_SESSION['produit_url']; ?>produit/rechercher.php">
                    <!-- Default input -->
                    <div class="input-group">
                        <input type="text" placeholder="Rechercher un produit" aria-label="Search"
                               class="form-control" name="produit">
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
            <div class="col-md-12 mb-4">
                <!--Card-->
                <div class="card">
                    <!--Card content-->
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="float-left">
                                    <h5 class="font-weight-bold"> Liste Produits</h5>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-right">
                                    <a href="<?= $_SESSION['produit_url']; ?>produit/ajouter.php"
                                       class="btn btn-primary btn-sm" style="border-radius: 20px!important;">Ajouter un
                                        article</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-responsive">

                        <!-- Table  -->
                        <table class="table table-hover table-sm table-bordered">
                            <thead class="blue-grey lighten-4">

                            <th>#</th>
                            <th>Titre</th>
                            <th>Date</th>
                            <th>Auteur</th>
                            <th class="text-right">Actions</th>
                            <!-- Table head -->
                            </thead>
                            <!-- Table body -->
                            <tbody>
                            <?php
                            $i = 1;

                            //select data request
                            $sql_request = "SELECT * FROM `posts` ORDER BY `post_time` DESC";
                            //execute request
                            $sql_query = $con_db->query($sql_request);
                            while ($response_db = $sql_query->fetch_assoc()) { ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $response_db['post_title']; ?></td>
                                    <td><?= $response_db['post_time']; ?></td>
                                    <td><?= $response_db['post_author']; ?></td>
                                    <td class="text-right">
                                        <a href="" class="btn btn-danger btn-sm" style="border-radius: 20px!important;">Supprimer</a>
                                        <a href="" class="btn btn-warning btn-sm"
                                           style="border-radius: 20px!important;">Editer</a>
                                        <a href="" class="btn btn-info btn-sm"
                                           style="border-radius: 20px!important;">Details</a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                            <!-- Table body -->
                        </table>
                        <!-- Table  -->

                    </div>

                </div>
                <!--/.Card-->
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </div>
</main>
<!--Main layout-->

<!-- inclusion du pied de page -->

<?php include_once "../includes/pied.php"; ?>