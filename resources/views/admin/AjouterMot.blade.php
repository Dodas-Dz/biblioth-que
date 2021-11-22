@include('layouts.header')

<div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand font-weight-bold" href="javascript:void(0)">Liste des Mot Clé</a>
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
                  <h2 class="card-title text-center font-sans-serif">Liste des Mot Clé</h2>
                  <h5 class="card-category text-center font-sans-serif"> 3 nouveaux, aujourd'hui</h5>
                </div>
       

        
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>Mot clé</th>
                      <th>nbr_livre</th>
                      <th>Supprimer</th>
                      <th>Modifier</th>
                      
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Technologie</td>
                        <td>3456</td>
                        <td><a href="#" onclick="delete_confirmation()"><i class="fa fa-trash" ></i></a></td>
                        <td><a href="#"><i class="fa fa-edit" ></i></a></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Film</td>
                        <td>789</td>
                        <td><a href="#"><i class="fa fa-trash" ></i></a></td>
                        <td><a href="#"><i class="fa fa-edit" ></i></a></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Java</td>
                        <td>4567</td>
                        <td><a href="#"><i class="fa fa-trash" ></i></a></td>
                        <td><a href="#"><i class="fa fa-edit" ></i></a></td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Web</td>
                        <td>3455</td>
                        <td><a href="#"><i class="fa fa-trash" ></i></a></td>
                        <td><a href="#"><i class="fa fa-edit" ></i></a></td>
                      </tr>
                    </tbody>
                  </table>
                  </div>
            </div>
        </div>
               
              </div>
              <div >
          <!-- Button trigger modal -->
         
             <a class="btn btn-primary btn-lg font-weight-bold text-light fs--1 stretched-link text-decoration-none " 
                    data-bs-toggle="modal" data-bs-target="#wnd" aria-haspopup="true" aria-expanded="false" role="button" 
                     v-pre> Ajouter Mot Clé
           </a>

    </div>


    <div class="modal" id="wnd">
              <div class="modal-dialog modal-dialog-scrollable modal-md">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                 
                    <h3 class="font-sans-serif text-center fw-bold fs-1 text-dark mx-auto ms-8"> Remplir les informations </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"aria-label="Close"></button> 
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body mx-auto">
                    <div class="row align-items-center mb-3 mt-3">
                    
                      
                     <form class="needs-validation" method="POST" action="{{ route('AjouterMots') }}" novalidate>

                      <div class="input-group-icon mb-3"> 
                        <label class="form-label col-12" for="inputCategories">Mot clé</label>
                      <input id="isbn" type="text" class="form-control form-little-squirrel-control form-control-sm" name="isbn" placeholder="Entrer un mot clé" required  autofocus>
                      <i class="fas fa-key input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i>
                     </div>

                     <div class="input-group-icon ms-2 mt-5 mb-3">
                      <button class="btn btn-primary form-little-squirrel-control" type="submit">Ajouter Mot Clé</button>
                      <i class="fas fa-plus input-box-icon" style="color:white"></i>
                     </div>

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