@include('layouts.header')    
<div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand font-weight-bold" href="javascript:void(0)">Liste des Abonnés</a>
          </div>

          @include('layouts.bar') 
      </nav>
      <!-- End Navbar -->

      <div class="content">
        <div class="container-fluid">


      <div class="row">
            <div class="col-lg-12 col-md-12 ">
              <div class="card ">
                <div class="card-header card-header-warning " >
                  <h2 class="card-title text-center ">Liste Abonnés</h2>
                  <h5 class="card-category text-center"> 3 nouveaux, aujourd'hui</h5>
                </div>
       

        
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Date de naissance</th>
                      <th>Supprimer</th>
                      <th>Modifier</th>
                      
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>TABET</td>
                        <td>Hadjer</td>
                        <td>27/12/2000</td>
                        <td><a href="#"><i class="fa fa-trash" ></i></a></td>
                        <td><a href="#"><i class="fa fa-edit" ></i></a></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>BELLOUFA</td>
                        <td>Zakaria</td>
                        <td>08/01/1999</td>
                        <td><a href="#"><i class="fa fa-trash" ></i></a></td>
                        <td><a href="#"><i class="fa fa-edit" ></i></a></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>ZENNAKI</td>
                        <td>Younes</td>
                        <td>08/01/1999</td>
                        <td><a href="#"><i class="fa fa-trash" ></i></a></td>
                        <td><a href="#"><i class="fa fa-edit" ></i></a></td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>MOUSSAOUI</td>
                        <td>Abdelhak</td>
                        <td>08/01/1999</td>
                        <td><a href="#"><i class="fa fa-trash" ></i></a></td>
                        <td><a href="#"><i class="fa fa-edit" ></i></a></td>
                      </tr>
                    </tbody>
                  </table>
                  </div>
            </div>
        </div>
               
              </div>
                  <div>
                  <a class="btn btn-primary btn-lg font-weight-bold text-light fs--1 stretched-link text-decoration-none " 
                    data-bs-toggle="modal" data-bs-target="#wnd" aria-haspopup="true" aria-expanded="false" role="button"  v-pre>
                     Ajouter Abonné
           </a>
                   
                      </div>
            
           

    <div class="modal" id="wnd">
              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                 
                    <button class="pull-right text-right" type="button"  data-bs-dismiss="modal">
                     <i class="material-icons large text-secondary  ">close  </i></button>

                     <h3 class="text-center font-weight-bold text-dark mx-auto"> Remplir les informations </h3> 
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body mx-auto">
                    <div class="row align-items-center mb-3">
                    
                      
                     <form class="needs-validation" novalidate>
                          <div class="form-row">

                           <div class="col-md-7 mb-3">
     
                              <input type="text" class="form-control" id="nom" placeholder="Nom"  required>
                               
                           </div>
    
                           <div class="col-md-7 mb-3">
     
                              <input type="text" class="form-control" id="prenom" placeholder="Prénom"  required>
                                 
                          </div>


                    </div>
  
                        <div class="form-row">
                           <div class="col-md-7 mb-3">
                           <label class="form-label" for="satenaissance">Date de naissance</label>
                                 <input type="date" class="form-control" id="datenaissance" placeholder="Date de Naissance" required>
                              
</div>
                     </div>
 
     
                            <div class="invalid-feedback">
                              You must agree before submitting.
                            </div>

                      <button class="btn btn-primary" type="submit">Ajouter</button>

</form>
</div>
  </div>

                 

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Fermer</button>
                  </div>

                </div>
              </div>
            </div>
      
                    
                  
                
         
        </div>
      </div>