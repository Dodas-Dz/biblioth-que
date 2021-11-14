@include('layouts.header')
<div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand font-weight-bold" href="javascript:void(0)">Liste des Livre</a>
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
                  <h2 class="card-title text-center ">Liste des Livres</h2>
                  <h5 class="card-category text-center"> 3 nouveaux, aujourd'hui</h5>
                </div>
             
        

        
         <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>Titre</th>
                      <th>Nom Auteur</th>
                      <th>Langue</th>
                      <th>Catégorie</th>
                      <th>Supprimer</th>
                      <th>Modifier</th>
                      
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>After</td>
                        <td>Anna Todd</td>
                        <td>fr / en</td>
                        <td>Roman</td>
                        <td><a href="#"><i class="fa fa-trash" ></i></a></td>
                        <td><a href="#"><i class="fa fa-edit" ></i></a></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Wonder</td>
                        <td>Raquel j.palacio</td>
                        <td>en</td>
                        <td>Enfant</td>
                        <td><a href="#"><i class="fa fa-trash" ></i></a></td>
                        <td><a href="#"><i class="fa fa-edit" ></i></a></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Harry Potter</td>
                        <td>Joanne Kathleen Rowling</td>
                        <td>en</td>
                        <td>Science fiction</td>
                        <td><a href="#"><i class="fa fa-trash" ></i></a></td>
                        <td><a href="#"><i class="fa fa-edit" ></i></a></td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>The choice</td>
                        <td>Ahmed Deedat</td>
                        <td>en</td>
                        <td>Islamique</td>
                        <td><a href="#"><i class="fa fa-trash" ></i></a></td>
                        <td><a href="#"><i class="fa fa-edit" ></i></a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
          </div>
</div>
</div>
</div>


                 <!-- <div>
              <button type="submit"  class="btn btn-primary pull-right" >
                      <a class=" fw-bold fs-1"
                         href="#"> 
                        <i class="fw-bold fs-2 fa fa-plus text-white ms- n2"> </i> </a>Ajouter un livre</button>
                   
                      </div>-->


                      <div >
          <!-- Button trigger modal -->
         
             <a class="btn btn-primary btn-lg font-weight-bold text-light fs--1 stretched-link text-decoration-none " 
                    data-bs-toggle="modal" data-bs-target="#wnd" aria-haspopup="true" aria-expanded="false" role="button"  v-pre> Ajouter livre
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
     
                              <input type="text" class="form-control" id="titre" placeholder="Titre"  required>
                                
                           </div>
    
                           <div class="col-md-7 mb-3">
     
                              <input type="text" class="form-control" id="isbn" placeholder="ISBN"  required>
                               
                          </div>

                           <div class="col-md-7 mb-3">
     
                              <div class="input-group">
                                <div class="input-group-prepend">
                                      <!--  <span class="input-group-text" id="inputGroupPrepend">@</span>-->
                                </div>
                                 <input type="text" class="form-control" id="nom_auteur" placeholder="Nom auteur" aria-describedby="inputGroupPrepend" required>
                               

                             </div>
                           </div>

                    </div>
  
                        <div class="form-row">
                           <div class="col-md-7 mb-3">
                           <label class="form-label" for="inputdate">Date de Production</label>
                                 <input type="date" class="form-control" id="date" placeholder="Date Production" required>
                              
                            </div>

                            <div class="col-md-8 mb-3">
   
                            <label class="form-label" for="inputCategories">Categories</label>

              <select class="form-select " id="categorie" onchange="searching()">
                <option selected disabled>Choisir une </option>
                <option value="islamique">Islamique</option>
                <option value="enfant">Enfant</option>
                <option value="manga">Manga</option>
                <option value="roman">Roman</option>
                <option value="science">Science</option>
                <option value="informatique">Informatique</option>
                <option value="histoire">Histoire</option>
                <option value="Litérature">Litérature</option>
                <option value="Dictionnaire">Dictionnaire</option>
              </select>
                                 
                            </div>

                         

                           <div class="col-md-7 mb-3">


                           <input type="file" class="form-control" id="image" placeholder="ajouter image" required>


                               
                          </div>

                          <div class="col-md-7 mb-3">

                          <label class="form-label" for="description">Description</label>
    <textarea class="form-control rounded-0" type="textarea" class="form-control" id="description" rows="10" placeholder="Description" required> </textarea>
   
</div>

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
      
            
           
      
                    
                  
                
         
     
     