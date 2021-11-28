@include('layouts.header')
<div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand font-weight-bold" href="javascript:void(0)">Liste des Livre</a>
          </div>
        
         <div class="collapse navbar-collapse justify-content-center px-5">
           
          <form class="navbar-form me-5" method="get" action={{route('searchAdmin')}}>
              <div class="input-group no-border">
                <input type="text" name='q' class="form-control" placeholder="Rechercher...">
                <button type="submit" class="btn btn-default btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
        </div>  
          
      </nav>
      

     
      <div class="content">
        <div class="container-fluid">


        
   
        <div class="row">
            <div class="col-lg-12 col-md-12 ">
              <div class="card ">
                <div class="card-header card-header-warning " >
                  <h2 class="card-title text-center font-sans-serif ">Liste des Livres</h2>
                  <h5 class="card-category text-center font-sans-serif"> 3 nouveaux, aujourd'hui</h5>
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
                    @foreach($livresfiltre as $livre)
                      <tr>
                        <td>{{$livre->isbn}}</td>
                        <td>{{$livre->titre}}</td>
                        <td>{{$livre->auteur}}</td>
                        <td>{{$livre->langue}}</td>
                        <td>{{$livre->Categorie->name}}</td>
                        <td>{{$livre->anneé}}</td>
                        <td>{{$livre->nbr}}</td>
                        <td><a href="{{ route('Livre.delete',$livre->id) }} " onclick="delete_confirmation()"><i class="fa fa-trash" ></i></a></td>
                        <td><a href="#"><i class="fa fa-edit" ></i></a></td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
          </div>
</div>
<div class="d-flex justify-content-center">{{$livresfiltre->links("pagination::bootstrap-4")}}
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
              <div class="modal-dialog modal-dialog modal-dm">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                     <h3 class="font-sans-serif text-center fw-bold fs-1 text-dark mx-auto ms-8"> Remplir les informations </h3>
                     <button type="button" class="btn-close" data-bs-dismiss="modal"aria-label="Close"></button> 
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body mx-auto">
                     
                    <div class="row align-items-center mb-3">
                      
                       <form class="needs-validation" novalidate method="POST" action="{{ route('AjouterL') }}" onsubmit="return livreformcheck(this) " enctype="multipart/form-data" >
                        
                          <div class="input-group-icon mb-3"> 
                            <label class="form-label col-12" for="inputCategories">Titre</label>
                               <input id="name" type="text" class="form-control form-little-squirrel-control form-control-sm @error('name') is-invalid @enderror" placeholder="Titre du livre" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                               <i class="fas fa-book input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i>
                          </div>
        
                        <div class="input-group-icon mb-3"> 
                          <label class="form-label col-12" for="inputCategories">ISBN</label>
                        <input id="isbn" type="number" class="form-control form-little-squirrel-control form-control-sm" name="isbn" placeholder="Isbn" required  autofocus>
                        <i class="fas fa-passport input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i>
                       </div>
                       <div class="input-group-icon mb-3"> 
                        <label class="form-label col-12" for="inputCategories">Nombre d'exemplaire</label>
                        <input id="nbr" type="number" class="form-control form-little-squirrel-control form-control-sm" name="nbr" placeholder="Nombre d'exemplaires" required  autofocus>
                        <i class="fas fa-sort-numeric-up-alt input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i>
                       </div>
                 
                      
                        <div class="input-group-icon mb-3"> 
                          <label class="form-label col-12" for="inputCategories">Nom d'auteur</label>
                        <input  type="text" class="form-control form-little-squirrel-control form-control-sm" name="nom_auteur" placeholder="Nom d'auteur" required  autofocus>
                        <i class="fas fa-user input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i>
                       </div>

                        <div class="input-group-icon mb-3"> 
                          <label class="form-label col-12" for="inputCategories">Date d'édition</label>
                        <input  type="date" class="form-control form-little-squirrel-control form-control-sm" name="date"required  autofocus>
                        <i class="fas fa-calendar input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i>
                       </div>
                      

                         <div class="input-group-icon mb-3">
                            <label class="form-label col-12" for="inputCategories">Categories</label>

                                <select name="categories" class="form-select form-little-squirrel-control form-select-sm col-12" aria-label=".form-select-sm example">
                                  
                                       <option  selected disabled>Choisir une Catégorie</option>
                                    @foreach($categories as $cat)
                                       <option name="categorie" value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                              </div>
                              
                         <div class="input-group-icon mb-3">
                          <label class="form-label col-12" for="inputMotcle">Mots Clé</label>

                          <select class="form-select form-select-sm form-little-squirrel-control mdb-select dropdown-primary md-form" multiple data-mdb-filter="true" searchable="Search here..">
                           
                            <option value="" disabled selected>Choisir un Mot clé</option>
                            <option value="1">USA</option>
                            <option value="2">Germany</option>
                            <option value="3">France</option>
                            <option value="4">Poland</option>
                            <option value="5">Japan</option>
                          </select>
                         
                            </div>

                          <div class="input-group-icon mb-3">
                            <label class="form-label col-12" for="inputCategories">Langue</label>
                                <select name="langue" class="form-select form-select-sm form-little-squirrel-control col-12" aria-label=".form-select-sm example"> 
                                
                                  <option  selected disabled>Choisir une Langue </option>                                
                                       <option name="langue" value="francais">Francais</option>
                                        <option name="langue" value="arab">Arabe</option>
                                         <option name="langue" value="anglais">Anglais</option>
                                </select>
                              </div>
                         
                              <div class="input-group-icon mb-3">
                                <label for="formFile" class="form-label col-12">L'image de couverture</label>
                                <i class="fas fa-image input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i>
                                <input name="image" class="form-control form-little-squirrel-control form-control-sm" type="file" id="formFile" placeholder="Insérer une image"required accept=".jpg,.gif,.png">
                              </div>

                              <div class="input-group-icon mb-3">
                          <label name="description" class="form-label col-12" for="description">Description</label>
                          <i class="fas fa-quote-left input-box-icon mt-n5" style="color:rgb(73, 73, 73)"></i>
                          <textarea name="description" class="form-control form-little-squirrel-control form-control-sm rounded-0" type="textarea" id="description" placeholder="Description du livre" rows="7" required></textarea>
                              </div>

                              <div class="input-group-icon ms-6 mt-5 mb-3">
                             <button class="btn btn-primary form-little-squirrel-control" type="submit">Ajouter Livre</button>
                             <i class="fas fa-book-medical input-box-icon" style="color:white"></i>
                            </div>
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

       
                  
                
         
     
     