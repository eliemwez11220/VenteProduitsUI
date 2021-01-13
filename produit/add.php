<?php

include '../db/database.php';

$title = $_POST['txt_titre'];
$auteur = $_POST['txt_auteur'];
$content = $_POST['txt_contenu'];

//insert data request
$sql_request = "INSERT INTO `posts`(`post_title`, `post_desc`, `post_author`) VALUES('".$title."', '".$content."','".$auteur."')";
//$sql_request="SELECT * FROM tb_users WHERE username='".$username."' and password='".$password."'";

//execute request
$sql_query = $con_db->query($sql_request);

if ($sql_query){
   // var_dump($title);
    header("Location:../page/produit.php");
}else{
    var_dump($title);
    header("Location:../erreurs/produit.php");
}