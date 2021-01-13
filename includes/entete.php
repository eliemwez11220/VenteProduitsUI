<?php
session_start();

//link images
$lien_avatar ="/shopping/assets/img/avatars/avatar.png";
$lien_logo ="/shopping/assets/img/logo/shopiza.png";

//autres parametres
$home = '/shopping/';
$index = '/shopping/index.php';
$page =  $_SERVER['REQUEST_URI'];
$base_url = ($page === $index OR $page === $home) ? "":"../";

//variables de session
$_SESSION['avatar']=$lien_avatar;
$_SESSION['logo']=$lien_logo;
$_SESSION['home']=$home;
$_SESSION['index']=$index;
$_SESSION['base']= $base_url;

$home_produit = '/shopping/page/';

$produit = '/shopping/page/produit.php';
$produit_url = ($page === $produit OR $page === $home_produit) ? "../" : " ";

$_SESSION['index_produit']=$home_produit;
$_SESSION['produit_page'] = $produit;
$_SESSION['produit_url'] = $produit_url;

//var_dump($_SESSION);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo ($_SERVER['REQUEST_URI'] == '/shopping/index.php'
            OR $_SERVER['REQUEST_URI'] == '/shopping/' ) ? "Bienvenue dans shopping" : $_SERVER['REQUEST_URI']; ?></title>
    <!-- icon -->
    <link href="<?= $_SESSION['avatar']; ?>" rel="icon">
    <!-- Font Awesome -->
    <link href="<?php echo $base_url; ?>assets/font/fa.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->

    <link href="<?php echo $base_url; ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo $base_url; ?>assets/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?php echo $base_url; ?>assets/css/style.min.css" rel="stylesheet">
    <style>

        .map-container{
            overflow:hidden;
            padding-bottom:56.25%;
            position:relative;
            height:0;
        }
        .map-container iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
        }
    </style>
</head>

<body class="grey lighten-3">
