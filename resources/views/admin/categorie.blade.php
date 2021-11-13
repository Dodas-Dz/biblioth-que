@include('layouts.header')
<div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Liste des catégories</a>
          </div>
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
                  <h2 class="card-title text-center ">Liste des Catégories</h2>
                  <h5 class="card-category text-center"> 3 nouveaux, aujourd'hui</h5>
                </div>
             
        

        
        <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>Catégorie</th>
                      <th>nbr_livre</th>
                      <th>Supprimer</th>
                      <th>Modifier</th>
                      
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Roman</td>
                        <td>345</td>
                        <td><a href="#"><i class="fa fa-trash" ></i></a></td>
                        <td><a href="#"><i class="fa fa-edit" ></i></a></td>
                      </tr>
                      <tr>
                      <tr>
                        <td>2</td>
                        <td>Enfant</td>
                        <td>3456</td>
                        <td><a href="#"><i class="fa fa-trash" ></i></a></td>
                        <td><a href="#"><i class="fa fa-edit" ></i></a></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Science</td>
                        <td>556</td>
                        <td><a href="#"><i class="fa fa-trash" ></i></a></td>
                        <td><a href="#"><i class="fa fa-edit" ></i></a></td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Islamique</td>
                        <td>4567</td>
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
              <button type="submit"  class="btn btn-primary pull-right" >
                      <a class=" fw-bold fs-1"
                         href="#"> 
                        <i class="fw-bold fs-2 fa fa-plus text-white ms- n2"> </i> </a>Ajouter une catégorie</button>
                   
                      </div>
            
           
      
                    
                  
                
         
        </div>
      </div>