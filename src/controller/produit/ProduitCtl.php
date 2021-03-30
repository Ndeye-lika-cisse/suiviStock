<?php

     if(isset($_POST['btnAddProduit'])) {
        
      extract($_POST);
      require_once "../../model/crud/produit/creerProduit.php";
      header("location:http://localhost:8080/suivistock/src/view/produit/listeProduit.php");
     }
?>