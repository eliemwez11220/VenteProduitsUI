<?php
$home = '/shopping/';
$index = '/shopping/index.php';
$page =  $_SERVER['REQUEST_URI'];
$base_url = ($page === $index OR $page === $home) ? "":"../";

?>
<!--Main Navigation-->
<header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
        <div class="container-fluid">

            <!-- Brand -->
            <a class="navbar-brand waves-effect" href="<?php echo $base_url; ?>index.php">
                <strong class="blue-text font-weight-bold text-uppercase">Trecazad Shopping</strong>
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">

                    </li>

                </ul>

                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/getting-started/download/"
                           target="_blank">Guide</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect" href="https://mdbootstrap.com/education/bootstrap/" target="_blank">Support</a>
                    </li>

                    <?php

                    if (isset($_SESSION['username'])) { ?>
                        <li class="nav-item">
                            <a href="<?= $base_url.'secure/login'; ?>" class="nav-link">
                                Se connecter
                            </a>
                        </li>
                        <?php
                    } else { ?>
                        <li data-toggle="tooltip" data-placement="bottom" class="nav-item dropdown">
                            <a class="nav-link float-right text-capitalize"
                               href="#"
                               data-toggle="dropdown">
                                <img src="<?= $_SESSION['avatar']; ?>" alt=""
                                     class="avatar"
                                     style="border-radius: 100px!important; height:40px!important; width:40px!important;">
                                <span class="text-capitalize font-weight-bold small">Elie Mwez</span>

                            </a>
                            <ul class="dropdown-menu settings-menu dropdown-menu-right">
                                <li>
                                    <a href="#"
                                       class="logo-wrapper waves-effect text-center mt-3 pt-3">
                                        <img src="<?= $_SESSION['avatar']; ?>"
                                             alt="Avatar"
                                             class="h-50 w-50">
                                    </a>
                                </li>

                                <li class="text-center"><a class="dropdown-item"
                                                           href="../profil/myAccount">
                                        <i class="fa fa-user"></i> Mon compte</a></li>
                                <li class="text-center"><a class="dropdown-item"
                                                           href="../index.php"
                                                           onclick="return confirm('Voulez-vous vraiment quitter ? vos opéations encours seront annulées') ">
                                        <i class="fa fa-lock"></i> Déconnexion</a></li>
                            </ul>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>

        </div>
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed">

        <a class="logo-wrapper waves-effect text-center mt-1 pt-1 w-100">
            <img src="<?= $_SESSION['logo']; ?>" class="img-fluid" alt="Avatar">
        </a>

        <div class="list-group list-group-flush">
            <a href="<?php echo ($_SERVER['REQUEST_URI'] !== '/shopping/index.php'
                OR $_SERVER['REQUEST_URI'] !== '/shopping/' ) ?  $_SESSION['index'] : $_SESSION['home']; ?>"
               class="list-group-item list-group-item-action waves-effect <?php echo ($_SERVER['REQUEST_URI'] == '/shopping/index.php'
                OR $_SERVER['REQUEST_URI'] == '/shopping/' ) ? "active" : ""; ?>">
                <i class="fa fa-dashboard mr-3"></i>Tableau de bord
            </a>
            <a href="<?php echo $_SESSION['base']; ?>page/produit.php"
               class="list-group-item list-group-item-action waves-effect
               <?php echo ($_SERVER['REQUEST_URI'] == '/shopping/page/produit.php' OR $_SERVER['REQUEST_URI'] == '/shopping/produit/' ) ? "active" : ""; ?>">
                <i class="fa fa-list mr-3"></i>Produits</a>
            <a href="#" class="list-group-item list-group-item-action waves-effect">
                <i class="fa fa-table mr-3"></i>Clients</a>
            <a href="#" class="list-group-item list-group-item-action waves-effect">
                <i class="fa fa-bookmark mr-3"></i>Commandes</a>
            <a href="#" class="list-group-item list-group-item-action waves-effect">
                <i class="fa fa-money mr-3"></i>Facturation</a>
        </div>

    </div>
    <!-- Sidebar -->

</header>
<!--Main Navigation-->