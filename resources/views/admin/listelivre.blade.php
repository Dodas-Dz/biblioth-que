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
        @if(session()->has('succe'))
        <div class="alert alert-success" role="alert">
         <h4 class="alert-heading">Succes</h4>
         <p> {{session()->get('succe')}}</p>
       </div>
        @endif
        @if(session()->has('echec'))
        <div class="alert alert-danger" role="alert">
         <h4 class="alert-heading">echec</h4>
         <p> {{session()->get('echec')}}</p>
        </div>
        @endif
        <div class="container-fluid">




          <div class="row">
            <div class="col-lg-12 col-md-12 ">
            <div class="card ">
                <div class="card-header card-header-warning " >
                  <h2 class="card-title text-center font-sans-serif">Liste Livres</h2>
                </div>
                <div class="card-body table-responsive">

              <div class="row">
                <div class="col-lg-12 col-md-12 ">

                  <div class="col-lg-6 col-md-12 ">
                  </div>

                  <div class="col-lg-6 col-md-12 ">
                    <form class="navbar-form " method="get" action={{route('searchAdmin')}}>
                      <div class="input-group input-group-sm mb-0">
                        <input type="text" name='q' class="form-control" placeholder="Rechercher..." aria-label="Rechercher..." aria-describedby="button-addon2">
                        <button class="btn btn-default btn-round btn-just-icon mt-0" type="submit" id="button-addon2">
                          <i class="material-icons">search</i>
                        </button>
                      </div>

                      </form>
                  </div>







               </div>




              <div class="row">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>Details</th>
                      <th>ISBN</th>
                      <th>Titre</th>
                      <th>Nom Auteur</th>
                      <th>Langue</th>
                      <th>Cat??gorie</th>

                       <th>Ann??e</th>
                       <th>Nombres</th>
                      <th>Supprimer</th>
                      <th>Modifier</th>

                    </thead>
                    <tbody>
                    @foreach($livresfiltre as $livre)

                      <tr>
                        <td>{{$livre->id}}</td>
                        <td><a href="#" data-bs-toggle="modal" data-bs-target="#livres{{$livre->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-square-fill" viewBox="0 0 16 16">
                          <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.93 4.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                        </svg>
                        </a></td>
                        <td>{{$livre->isbn}}</td>
                        <td>{{$livre->titre}}</td>
                        <td>{{$livre->auteur}}</td>
                        <td>{{$livre->langue}}</td>
                       <td>{{$livre->Categorie->name}}</td>
                        <td>{{$livre->anne??}}</td>
                        <td>{{$livre->nbr}}</td>
                        <td><a data-bs-toggle="modal" data-bs-target="#li{{$livre->id}}" href="{{ route('Livre.delete',$livre->id) }}" ><i class="fa fa-trash" ></i></a></td>
                        <td><a href="{{ route('livre.update',$livre->id) }}" data-bs-toggle="modal" data-bs-target="#livress{{$livre->id}}" ><i class="fa fa-edit" ></i></a></td>
                      </tr>
                      <!----supp----------------------->
<div class="modal" id="li{{$livre->id}}">
  <div class="modal-dialog modal-dialog-centered modal-dm">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
         <h3 class="font-sans-serif text-center fw-bold fs-1 text-dark mx-auto ms-8"> Confirmer Supression </h3>
         <button type="button" class="btn-close" data-bs-dismiss="modal"aria-label="Close"></button> 
      </div>

      <!-- Modal body -->
      <div class="modal-body mx-auto">
         
        <div class="row align-items-center mb-3">
          <p> Voulez-vous vraiment supprimer <br>
            <b> {{$livre->titre}}  </b> ?
          </p>
          
    </div>
    </div>

      <!-- Modal footer -->
      <div class="modal-footer ">
        <a href="{{route('Livre.delete',$livre->id) }}" type="button" class="btn btn-outline-danger">OUI</a>
        <button type="button" class="btn btn-outline-white" data-bs-dismiss="modal">NON</button>
            </div>
          </div>
          </div>
        </div>

        <!--------fin supp-------------->


                  <!---------------afficher livre modal---------------------->

                      <div class="modal" id="livres{{$livre->id}}">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h2 class="text-center modal-title ">{{$livre->titre}}</h2>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                              <div class="row align-items-center mb-3">
                                <div class=" col-md-6 "> <img class="img-fluid rounded float-start"  width="250px" height="250px" src="{{asset('livre/'.$livre->image)}}" />
                                  <img class="img-fluid rounded float-start " width="250px" height="250px" src="{{$livre->image}}" /></div>
                                <div class="col-md-6">
                                    <h5>
                                      Auteur: </h5><p>{{$livre->auteur}}</p>

                                    <h5>
                                      ISBN: </h5><p>{{$livre->isbn}}</p>

                                    <h5>
                                      Ann??e:</h5> <p class="date">{{$livre->anne??}}</p>

                                    <h5>
                                      Langues:</h5> <p>{{$livre->langue}}</p>

                                    <h5 >
                                      Categorie: </h5><p>{{$livre->Categorie->name}}</p>
                                    
                                      <h5 >
                                        Mots Cl??: </h5><p>{{$livre->mot}}</p>

                                </div>

                              </div>
                             <div class="row"><h3 class="text-center">Description</h3>
                              <p>
                                {{$livre->resumer}}
                                 </p>
                              </div>



                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                            </div>
                          </div>


                        </div>
                      </div>




<!---------------------------fin afficher livre modal-------------------------------------------->

<!-----------------------editer un livre existant------------------------------------------------------>


<div class="modal" id="livress{{$livre->id}}">
  <div class="modal-dialog modal-dialog modal-dm">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
         <h3 class="font-sans-serif text-center fw-bold fs-1 text-dark mx-auto ms-8"> Modifier les informations </h3>
         <button type="button" class="btn-close" data-bs-dismiss="modal"aria-label="Close"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body mx-auto">

        <div class="row align-items-center mb-3">

           <form class="needs-validation" novalidate method="PUT" action="{{ route('livre.update',$livre->id) }}" onsubmit="return livreformcheck(this) " enctype="multipart/form-data" >
            @method('PUT')

            <style>
                              input:valid {
                  color: green;
                }
                input:invalid {
                  color: red;
                }
          </style>

              <div class="input-group-icon mb-3">
                <label class="form-label col-12" for="inputCategories">Titre</label>
                   <input id="name" type="text" class="form-control form-little-squirrel-control form-control-sm @error('name') is-invalid @enderror" placeholder="Titre du livre" name="name" value="{{ $livre->titre }}" required autocomplete="name" autofocus>
                   <i class="fas fa-book input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i>
              </div>

            <div class="input-group-icon mb-3">
              <label class="form-label col-12" for="inputCategories">ISBN</label>
            <input id="isbn" type="number" class="form-control form-little-squirrel-control form-control-sm" name="isbn" value="{{ $livre->isbn }}" placeholder="Isbn" required  autofocus>
            <i class="fas fa-passport input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i>
           </div>

           <div class="input-group-icon mb-3">
            <label class="form-label col-12" for="inputCategories">Nombre d'exemplaire</label>
            <input id="nbr" type="number" class="form-control form-little-squirrel-control form-control-sm" name="nbr" placeholder="Nombre d'exemplaires" value="{{ $livre->nbr }}" required  autofocus>
            <i class="fas fa-sort-numeric-up-alt input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i>
           </div>


            <div class="input-group-icon mb-3">
              <label class="form-label col-12" for="inputCategories">Nom d'auteur</label>
            <input  type="text" class="form-control form-little-squirrel-control form-control-sm" name="nom_auteur" placeholder="Nom d'auteur" value="{{ $livre->auteur }}" required  autofocus>
            <i class="fas fa-user input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i>
           </div>

            <div class="input-group-icon mb-3">
              <label class="form-label col-12" for="inputCategories">Date d'??dition</label>
            <input  type="date" class="form-control form-little-squirrel-control form-control-sm" name="date" value="{{ $livre->ann??e }}" required  autofocus>
            <i class="fas fa-calendar input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i>
           </div>


             <div class="input-group-icon mb-3">
                <label class="form-label col-12" for="inputCategories">Categories</label>

                    <select name="categories" class="form-select form-little-squirrel-control form-select-sm col-12" aria-label=".form-select-sm example" value="{{ $livre->Categorie->name}}">

                           <option  selected disabled>Choisir une Cat??gorie</option>
                        @foreach($categories as $cat)
                           <option name="categorie" value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                    </select>
                  </div>

            

              <div class="input-group-icon mb-3">
                <label class="form-label col-12" for="inputCategories">Langue</label>
                    <select name="langue" class="form-select form-select-sm form-little-squirrel-control col-12" aria-label=".form-select-sm example" value="{{ $livre->langue }}">

                      <option  selected disabled>Choisir une Langue </option>
                           <option name="langue" value="francais">Francais</option>
                            <option name="langue" value="arab">Arabe</option>
                             <option name="langue" value="anglais">Anglais</option>
                    </select>
                  </div>

                  <div class="input-group-icon mb-3">
                    <label for="formFile" class="form-label col-12">L'image de couverture</label>
                    <i class="fas fa-image input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i>
                    <input name="image" class="form-control form-little-squirrel-control form-control-sm" type="file" id="formFile" placeholder="Ins??rer une image"required accept=".jpg,.gif,.png">
                    <img class="img-fluid rounded float-start " src="{{asset('livre/'.$livre->image)}}" width="150px" height="150px">
                    <img class="img-fluid rounded float-start h-75" width="150px" height="150px" src="{{$livre->image}}" />
                  </div>

                  <div class="input-group-icon mb-3">
              <label name="description" class="form-label col-12" for="description">Description</label>
              <i class="fas fa-quote-left input-box-icon mt-n5" style="color:rgb(73, 73, 73)"></i>
              <textarea name="description" class="form-control form-little-squirrel-control form-control-sm rounded-0" type="textarea" id="description" placeholder="Description du livre" rows="7" value="{{ old('resumer') }}" required></textarea>
                  </div>

                  <div class="input-group-icon ms-6 mt-5 mb-3">
                 <button class="btn btn-primary form-little-squirrel-control" type="submit">Modifier Livre</button>
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

        @endforeach
      </tbody>
    </table>

              <a class="btn btn-primary btn-lg font-weight-bold text-light fs--1 stretched-link text-decoration-none "
              data-bs-toggle="modal" data-bs-target="#wnd" aria-haspopup="true" aria-expanded="false" role="button"  v-pre> Ajouter livre
          </a>
            <div class="d-flex justify-content-center">{{$livresfiltre->links("pagination::bootstrap-4")}}
            </div>

  </div>
</div>
</div>
</div>
</div>

  <!-----------------------fin editer un livre existant------------------------------------------------------>





         <!----------------------Cr??er un nv livre modal -------------------------------------->
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
                  <label class="form-label col-12" for="inputCategories">Date d'??dition</label>
                <input  type="date" class="form-control form-little-squirrel-control form-control-sm" name="date"required  autofocus>
                <i class="fas fa-calendar input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i>
               </div>


                 <div class="input-group-icon mb-3">
                    <label class="form-label col-12" for="inputCategories">Categories</label>

                        <select name="categories" class="form-select form-little-squirrel-control form-select-sm col-12" aria-label=".form-select-sm example">

                               <option  selected disabled>Choisir une Cat??gorie</option>
                            @foreach($categories as $cat)
                               <option name="categorie" value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
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
                        <input name="image" class="form-control form-little-squirrel-control form-control-sm" type="file" id="formFile" placeholder="Ins??rer une image"required accept=".jpg,.gif,.png">
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

<!----------------------fin Cr??er un nv livre modal -------------------------------------->

                    </div>


                  </div>

                </div>




