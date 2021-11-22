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
                        <td>{{$livre->auteur}}</td>
                        <td>{{$livre->langue}}</td>
                        <td>{{$livre->Categorie->name}}</td>
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
                      
                       <form class="needs-validation" novalidate method="POST" action="{{ route('AjouterL') }}" onsubmit="return livreformcheck(this)" >
                        
                          <div class="input-field mb-3"> 
                            <label class="form-label col-12" for="inputCategories">Titre</label>
                               <input id="name" type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" placeholder="Titre du livre" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                          </div>
        
                        <div class="input-field mb-3"> 
                          <label class="form-label col-12" for="inputCategories">ISBN</label>
                        <input id="isbn" type="number" class="form-control form-control-sm" name="isbn" placeholder="Isbn" required  autofocus>
                       </div>
                       <div class="input-field mb-3"> 
                        <label class="form-label col-12" for="inputCategories">Nombre d'exemplaire</label>
                        <input id="nbr" type="number" class="form-control form-control-sm" name="nbr" placeholder="Nombre d'exemplaires" required  autofocus>
                       </div>
                 
                      
                        <div class="input-field mb-3"> 
                          <label class="form-label col-12" for="inputCategories">Nom d'auteur</label>
                        <input  type="text" class="form-control form-control-sm" name="nom_auteur" placeholder="Nom d'auteur" required  autofocus>
                       </div>

                        <div class="input-field mb-3"> 
                          <label class="form-label col-12" for="inputCategories">Date d'édition</label>
                        <input  type="date" class="form-control form-control-sm" name="date"required  autofocus>
                       </div>
                      

                         <div class="input-field mb-3 mx-auto">
                            <label class="form-label col-12" for="inputCategories">Categories</label>

                                <select name="categories" class="form-select form-select-sm col-12" aria-label=".form-select-sm example">
                                       <option value="" selected disabled>Choisir une </option>
                                    @foreach($categories as $cat)
                                       <option name="categorie" value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                              </div>
                              
                         <div class="input-field mb-3 mx-auto">
                          <label class="form-label col-12" for="inputCategories">Mots Clé</label>

                          <select class="selectpicker">
                            <option value="0" selected>what</option>
                            <option value="1">Mustard</option>
                            <option value="2">Ketchup</option>
                            <option value="3">Barbecue</option>
                          </select>
                          
                            </div>

                          <div class="input-fieldmy-2 mb-3 mx-auto">
                            <label class="form-label col-12" for="inputCategories">Langue</label>
                                <select name="langue" class="form-select form-select-sm col-12" aria-label=".form-select-sm example"> 
                                  <option  selected disabled>Choisir une </option>                                
                                       <option name="langue" value="francais">francais</option>
                                        <option name="langue" value="arab">arab</option>
                                         <option name="langue" value="anglais">anglais</option>
                                </select>
                              </div>
                         
                              <div class="input-field my-2 mb-3 mx-auto">
                                <label for="formFile" class="form-label col-12">L'image de couverture</label>
                                <input name="image" class="form-control form-control-sm" type="file" id="formFile" placeholder="Insérer une image"required accept=".jpg,.gif,.png">
                              </div>

                              <div class="input-field my-2 mb-3 mx-auto">
                          <label name="description" class="form-label col-12" for="description">Description</label>
                            <textarea name="description" class="form-control form-control-sm rounded-0" type="textarea" id="description" placeholder="Description du livre" rows="7" required></textarea>
                              </div>

                              <div class="input-field col-12 ms-7">
                             <button class="btn btn-primary text-center font-sans-serif" type="submit">Ajouter</button>
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
     <script>
       $(function () {
    $('select').selectpicker();
});
     </script>
      
            
           
      
                    
                  
                
         
     
     