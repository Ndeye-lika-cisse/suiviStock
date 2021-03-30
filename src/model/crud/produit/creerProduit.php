<?php

 require_once "../../../bootstrap.php";
 require_once "../../model/crud/user/recherUser.php";
 $produit = new Produit();
 $produit->setRef($ref);
 $produit->setNom($nom);
 $produit->setQtStock($qtStock);
 $produit->setUserId($userId);
 $entityManager->persist($produit);
 $entityManager->flush();

?>