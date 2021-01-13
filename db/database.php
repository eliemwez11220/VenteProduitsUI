<?php
    //connexion a la base de donnees
    $con_db=new mysqli("localhost", "root", "", "blog");
    if($con_db){

    }else{
        echo "Echec de connexion au serveur";
        exit();
    }
