<?php
    require_once 'db.php';

   /* function genererNumero(){
        global $base;

        $req = "SELECT MAX(idEmploye) FROM employe";
        $resultat = $base->query($req)->fetch();
        $id = $resultat[0] + 1;

        return 'BG_EMP_'.date('dmY').'_'.$id;

    }*/

    function verifierConnexion($email,$mdp){
        $req = "SELECT * FROM user WHERE email='$email' AND 
                password = '$mdp'";
        global $db;
       return $db->query($req)->fetch();

    }

    #retourne la liste des employés de la BD
    function getUser(){
        $req = "SELECT * FROM user ";
        global $db;

        return $db->query($req)->fetchAll();
    }

    #Supprime le user dont l'id est passé en parametre
    function supprimerUser($id){
        global $db;
        $req = "DELETE FROM user WHERE id = $id";

        return $db->exec($req);
    }

    #Ajoute un user dans la BD

    function addUser($id,$nom,$prenom,$email,$etat){
        global $db;

        $req = "INSERT INTO user (id,nom,prenom,email,etat,password) VALUES ('$id','$nom','$prenom','$email','$etat')";

        return $db->exec($req);
    }

    #rechercher un employe à travers son id
    function findUserById($id){
        global  $db;

        $req ="SELECT * FROM user WHERE id = $id";
        return $base->query($req)->fetch();
    }

