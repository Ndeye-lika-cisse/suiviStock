<?php
        include_once '../../../header.php';
        ?>
<div class="col-md-3 offset-7 mt-4">
            <a href="addProduit.php" class="btn btn-sm btn-primary">Ajouter</a>
            <a href="../../../index.php" class="btn btn-sm btn-danger">Deconnexion</a>
        </div>

<div class="row">
    
<div class="wrapper ">
<div class="content-wrapper col-md-12 offset-7">
<h1 class="text-center ">SUIVI STOCK</h1>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">LISTE DES PRODUITS</h3>

                <div class="card-tools">
                  <a href="rechercheProduit.php">Recherche</a>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover table table-info text-nowrap ">
                  <thead>
                    <tr>
                      <th>Reference</th>
                      <th>Nom</th>
                      <th>Quantite</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

    </div>
 </div> 
 </div>
</div>        
        <?php
        include_once '../../../footer.php';
        ?>