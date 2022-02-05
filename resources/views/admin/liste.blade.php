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
                  <h2 class="card-title text-center font-sans-serif ">Liste Abonnés</h2>
                  <h5 class="card-category text-center font-sans-serif"> 3 nouveaux, aujourd'hui</h5>
                </div>
       

        
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>Détails</th>
                     <th>image</th>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Date de naissance</th>
                      <th>N° de carte</th>

                      <th>code bar </th>
                      <th>Imprimer</th>
                      <th>Supprimer</th>
                      <th>Modifier</th>
                      
                    </thead>
                    <tbody> 
                      @foreach($abonnes as $Abonne)
                      
                      <tr>
                        <td>{{$Abonne->id}}</td>
                        <td><a href="#" data-bs-toggle="modal" data-bs-target="#abone{{$Abonne->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-square-fill" viewBox="0 0 16 16">
                          <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.93 4.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                        </svg>
                        </a></td>
                      <td><img height="60px" width="50px"  src="{{asset('abonnes/'.$Abonne->image)}}"/></td>
                        <td>{{$Abonne->name}}</td>
                        <td>{{$Abonne->prenom}}</td>
                        <td>{{$Abonne->date_naissance}}</td>
                        <td>{{$Abonne->student_id}}</td>
                        <td> <div class="mb-3">{!! DNS1D::getBarcodeHTML($Abonne->id, 'CODABAR',2,30) !!}</div> </td>
                        <td><a href="{{ route('abonne.pdf',$Abonne->id)}}"><i class="fa fa-print" ></i></a>   </td>
                        <td><a href=""data-bs-toggle="modal" data-bs-target="#abo{{$Abonne->id}}" ><i class="fa fa-trash" ></i></a></td>
                        <td><a href="{{ route('abonne.update',$Abonne->id) }}" data-bs-toggle="modal" data-bs-target="#abonne{{$Abonne->id}}"><i class="fa fa-edit" ></i></a></td>
                      </tr>
<!----supp----------------------->
<div class="modal" id="abo{{$Abonne->id}}">
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
            <b> {{$Abonne->name}} {{$Abonne->prenom}} </b> ?
          </p>
          
    </div>
    </div>

      <!-- Modal footer -->
      <div class="modal-footer ">
        <a href="{{ route('abonne.delete',$Abonne->id) }}" type="button" class="btn btn-outline-danger">OUI</a>
        <button type="button" class="btn btn-outline-white" data-bs-dismiss="modal">NON</button>
            </div>
          </div>
          </div>
        </div>

        <!--------fin supp-------------->
  <!---------------afficher livre modal---------------------->

  <div class="modal" id="abone{{$Abonne->id}}">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h2 class="text-center modal-title ">{{$Abonne->name}} {{$Abonne->prenom}}</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <div class="row align-items-center mb-3">
            <div class=" col-md-6 "> <img class="img-fluid rounded float-start h-75" src="{{asset('abonnes/'.$Abonne->image)}}" alt="wonder.png"></div>
            <div class="col-md-6">
                <h5>
                  Nom : </h5><p>{{$Abonne->name}}</p>

                <h5>
                  Prénom : </h5><p>{{$Abonne->prenom}}</p>

                <h5>
                  Date de naissance :</h5> <p class="date">{{$Abonne->date_naissance}}</p>

                <h5>
                  N° de carte:</h5> <p>{{$Abonne->student_id}}</p>


                  @foreach($emprent_nbr as $Abo)

                  @if($Abo->id == $Abonne->id)
                <h5 >
                 Livres empreintés: </h5><p> {{$Abo->nbr_livre_empreinter}}</p>

                 <h5 >
                  Livres rendu: </h5><p> {{$Abo->nbr_livre_rendu}}</p>

              
            
                 @endif
                 @endforeach

               

            </div>

          </div>
         <div class="row"><h3 class="text-center">Détails</h3>

          <h5 >
            Livre ID: </h5><p>TITRE LIVRE</p>
            <h5 >
              Livre ID: </h5><p>TITRE LIVRE</p>



        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
        </div>
      </div>


    </div>
  </div>
  </div>




<!---------------------------fin afficher livre modal-------------------------------------------->
                      <!-----------------------editer un livre existant------------------------------------------------------>


<div class="modal" id="abonne{{$Abonne->id}}">
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
          
           <form class="needs-validation" novalidate method="POST" action="{{ route('abonne.update',$Abonne->id) }}" onsubmit="return aboneformcheck(this) " enctype="multipart/form-data" >
            @method('PATCH')

            <div class="input-group-icon mb-3 "> 
              <label class="form-label col-12" for="inputCategories">Email</label>
              <input id="mail" type="email" class="form-control form-little-squirrel-control @error('mail') is-invalid @enderror" placeholder="Email" name="mail" value="{{$Abonne->mail}}" autocomplete="mail" autofocus/>
              <i class="fas fa-user input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i> 
            </div>
            <style>
                                  input:valid {
                      color: green;
                    }
                    input:invalid {
                      color: red;
                    }
              </style>

            <div class="input-group-icon mb-3 "> 
              <label class="form-label col-12" for="inputCategories">Nom</label>
               <input id="name" type="text" class="form-control form-little-squirrel-control @error('name') is-invalid @enderror" placeholder="Nom" name="name" value="{{$Abonne->name}}" autocomplete="name" autofocus/>
               <i class="fas fa-user input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i> 
            </div>
            <div class="input-group-icon mb-3"> 
              <label class="form-label col-12" for="inputCategories">Prénom</label>
               <input id="prenom" type="text" class="form-control form-little-squirrel-control @error('prenom') is-invalid @enderror" placeholder="Prenom" name="prenom" value="{{$Abonne->prenom}} "  autocomplete="prenom" autofocus>
               <i class="fas fa-user input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i>
            </div>
    
            <div class="input-group-icon mb-3"> 
              <label class="form-label col-12" for="inputCategories">Date de naissance</label>
            <input  type="date" class="form-control form-little-squirrel-control form-control-sm @error('date_naissance') is-invalid @enderror" name="date_naissance" value="{{old('date_naissance')}} " required  autofocus>
            <i class="fas fa-calendar input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i>
           </div>
          <div class="input-group-icon mb-3">
                <label for="formFile" class="form-label col-12">Photo de profil</label>
                <i class="fas fa-image input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i>
                <input name="image" class="form-control form-little-squirrel-control form-control-sm" type="file" id="formFile" placeholder="Insérer une image"required accept=".jpg,.gif,.png">
                <img src=" {{asset('abonnes/'.$Abonne->image)}}" width="70px" height="70px" alt="Image">
          </div>

           <div class="input-group-icon ms-3 mb-3 mt-7">
            <button class="btn btn-primary form-little-squirrel-control" type="submit">Modifier Abonné</button>
            <i class="fas fa-user-plus amber-text input-box-icon" style="color:white"></i>
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
              data-bs-toggle="modal" data-bs-target="#wnd" aria-haspopup="true" aria-expanded="false" role="button"  v-pre> Ajouter abonné
          </a> 
            <!--<div class="d-flex justify-content-center">
            </div>-->

  </div>
</div>
</div>
</div>
</div>

  <!-----------------------fin editer un livre existant------------------------------------------------------>


  
           
                   
            
  <!------------------- créer nv abonne----------------------------------->         

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
                    <div class="row align-items-center mb-3">
                    
                      
                     <form class="needs-validation" method="POST" action="{{ route('createabonne') }}" onsubmit="return aboneformcheck(this)" enctype="multipart/form-data" novalidate>
                     
                            <div class="input-group-icon mb-3 "> 
                              <label class="form-label col-12" for="inputCategories">Email</label>
                              <input id="mail" type="email" class="form-control form-little-squirrel-control @error('mail') is-invalid @enderror" placeholder="Email" name="mail" value="{{ old('mail') }}" autocomplete="mail" autofocus/>
                              <i class="fas fa-user input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i> 
                            </div>

                            <div class="input-group-icon mb-3 "> 
                              <label class="form-label col-12" for="inputCategories">Nom</label>
                               <input id="name" type="text" class="form-control form-little-squirrel-control @error('name') is-invalid @enderror" placeholder="Nom" name="name" value="{{ old('name') }}" autocomplete="name" autofocus/>
                               <i class="fas fa-user input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i> 
                            </div>
                            <div class="input-group-icon mb-3"> 
                              <label class="form-label col-12" for="inputCategories">Prénom</label>
                               <input id="prenom" type="text" class="form-control form-little-squirrel-control @error('prenom') is-invalid @enderror" placeholder="Prenom" name="prenom" value="{{ old('prenom') }}"  autocomplete="prenom" autofocus>
                               <i class="fas fa-user input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i>
                            </div>
                    
                            <div class="input-group-icon mb-3"> 
                              <label class="form-label col-12" for="inputCategories">Date de naissance</label>
                            <input  type="date" class="form-control form-little-squirrel-control form-control-sm @error('date_naissance') is-invalid @enderror" name="date_naissance"required  autofocus>
                            <i class="fas fa-calendar input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i>
                           </div>
                          <div class="input-group-icon mb-3">
                                <label for="formFile" class="form-label col-12">Photo de profil</label>
                                <i class="fas fa-image input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i>
                                <input name="image" class="form-control form-little-squirrel-control form-control-sm" type="file" id="formFile" placeholder="Insérer une image"required accept=".jpg,.gif,.png">
                          </div>

                           <div class="input-group-icon ms-3 mb-3 mt-7">
                            <button class="btn btn-primary form-little-squirrel-control" type="submit">Ajouter Abonné</button>
                            <i class="fas fa-user-plus amber-text input-box-icon" style="color:white"></i>
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
      
                    
                  
                
         
        </div>
      </div>