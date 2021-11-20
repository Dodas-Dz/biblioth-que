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
                      <th>ISBN</th>
                      <th>Titre</th>
                      <th>Nom Auteur</th>
                      <th>Langue</th>
                      <th>Catégorie</th>
                       <th>Année</th>
                       <th>Nombres</th>
                      <th>Supprimer</th>
                      <th>Modifier</th>
                     
                      
                    </thead>
                    <tbody>
                    @foreach($livres as $livre)
                      <tr>
                        <td>{{$livre->isbn}}</td>
                        <td>{{$livre->titre}}</td>
                        <td>{{$livre->autuer}}</td>
                        <td>{{$livre->langue}}</td>
                        <td></td>
                        <td>{{$livre->anneé}}</td>
                        <td>{{$livre->nbr}}</td>
                        <td><a href="#" onclick="delete_confirmation()"><i class="fa fa-trash" ></i></a></td>
                        <td><a href="#"><i class="fa fa-edit" ></i></a></td>
                      </tr>
                    @endforeach
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
              <div class="modal-dialog modal-dialog-scrollable modal-md">
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
                      
                       <form class="needs-validation" novalidate method="POST" action="{{ route('AjouterL') }}" >
                        

                          <div class="input-field"> 
                               <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nom" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                          </div>
        
                        <div class="input-field"> 
                        <input id="isbn" type="text" class="form-control  " name="isbn" placeholder="Isbn" required  autofocus>
                       </div>
                 
                       <div class="my-2">
                        <div class="input-field"> 
                        <input  type="text" class="form-control  " name="nom_auteur" placeholder="nom auteur" required  autofocus>
                       </div>
                        <div class="input-field"> 
                        <input  type="date" class="form-control  " name="date"required  autofocus>
                       </div>
                      </div>

                        
                          

                            <div class="row my-2">
                       
                            <label name="categorie" class="form-label col-12" for="inputCategories">Categories</label>
                            
                           
                            <select class="form-select form-select-lg col-12" aria-label=".form-select-lg example">
                                       <option selected disabled>Choisir une </option>
                                   
                                       <option value="categorie">categorie</option>
                                 
                                </select>
                            
                             
                              </div>
                         

                          


                           <input type="file" name="image" class="form-control" id="image" placeholder="ajouter image" required>


                               
                     

                          

                          <label name="description"class="form-label" for="description">Description</label>
                            <textarea class="form-control rounded-0" type="textarea" class="form-control" id="description" rows="7" placeholder="Description" required> </textarea>
                          
                       

 
     
                           

                      <button class="btn btn-primary text-center" type="submit">Ajouter</button>

                </form>
</div>
</div>
  

                 

                  <!-- Modal footer -->
                  <div class="modal-footer ">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Fermer</button>
                  </div>
                </div>
                </div>
              </div>
            </div>

          </div>
     
      
            
           
      
                    
                  
                
         
     
     