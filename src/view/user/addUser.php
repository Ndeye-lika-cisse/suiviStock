<?php
include_once '../../../header.php';
?>
<div>
<aside class="main-sidebar sidebar-dark-primary elevation-4">

<nav class="mt-2">
<ul class="navbar-nav">
      
     
      <li class="nav-item d-none d-sm-inline-block primary">
        <h1><g>SUIVI STOCK</g></h1>
      </li>
    </ul>
    <a href="../../../accueil.php" class="btn btn-sm btn-primary mt-4 mb-4 form-control">ACCUEIL</a>
  </br>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Produit
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../produit/addProduit.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter un produit</p>
                </a>
              </li>
             <li class="nav-item">
                <a href="../produit/listeProduit.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste des produits</p>
                </a>
              </li>
             
                <!--<a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>-->
              </li>
            </ul>
          </li>

          <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Utilisateur
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addUser.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter un utilisateur</p>
                </a>
              </li>
             <li class="nav-item">
                <a href="listeUser.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste des utilisateurs</p>
                </a>
              </li>
             
                <!--<a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>-->
              </li>
            </ul>
          </li>
          <a href="../../../index.php" class="btn btn-sm btn-danger mt-4 mb-4 form-control">DECONNEXION</a>
</aside>
</div>
<div class="wrapper ">
 <div class="content-wrapper ">
 <marquee behavior="" direction="rigth"><h1><i>SUIVI STOCK</i></h1></marquee>
 
<section class="content">

      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header text-center">
            <h3 class="card-title ">AJOUTER UN UTILISATEUR</h3>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>ID</label>
                  <input type="number" name="id" style="width: 100%;" class="form-control">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Nom</label>
                  <input type="text" name="nom" style="width: 100%;" class="form-control">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Prenom</label>
                  <input type="text" name="prenom" style="width: 100%;" class="form-control">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" style="width: 100%;" class="form-control">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            
            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Etat</label>
                  <input type="text" name="etat" style="width: 100%;" class="form-control">
                </div>
                <!-- /.form-group -->
                
              </div>
              <!-- /.col -->
             
                <!-- /.form-group -->
                <div class="col-md-4 offset-5 mt-4">
                            <input type="submit" name="btnAddUser" class="btn btn-md btn-info" onclick="verifierAddUser()">
                        </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
            the plugin.
          </div>
        </div>
        <!-- /.card -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div>
    
      <!-- /.container-fluid -->
    </section>
    </div>
      
</div> 
<?php
include_once '../../../footer.php';
?>   