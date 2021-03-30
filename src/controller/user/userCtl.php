<?php
session_start();
    require_once '../../../model/UserBD.php';

   /* if (isset($_POST['btnConnecter'])){
        extract($_POST);
        $user = verifierConnexion($email,$mdp);

        if($user != NULL){
            $_SESSION['id'] = $user['id'];
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['prenom'] = $user['prenom'];
            $_SESSION['profil'] = $user['etat'];

            header("location:/suivistock/accueil.php");
        }
    }*/

    if(isset($_POST['btnAddUser'])){
        extract($_POST);
        if(ajoutUser($id,$nom,$prenom,$email,$etat) == 1){
            header("location:/suivistock/listeUser.php?user=ajoutUser&reussi");
        }
    }
    if(isset($_GET['btnDecon'])){
        session_unset();
        header("location:/suivistock");
    }
