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
                  <h2 class="card-title text-center font-sans-serif ">Liste Abonnés</h2>
                  <h5 class="card-category text-center font-sans-serif"> 3 nouveaux, aujourd'hui</h5>
                </div>
       

        
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                     
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Date de naissance</th>
                      <th>N° de carte</th>
                      <th>Imprimer</th>
                      <th>Supprimer</th>
                      <th>Modifier</th>
                      
                    </thead>
                    <tbody>
                      @foreach($abonnes as $Abonne)
                      <tr>
                        <td>{{$Abonne->id}}</td>
                      <!--  <td><img class="card-img-top w-100" src="{{url('$Abonne->image')}}"/></td>-->
                        <td>{{$Abonne->name}}</td>
                        <td>{{$Abonne->prenom}}</td>
                        <td>{{$Abonne->date_naissance}}</td>
                        <td>{{$Abonne->student_id}}</td>
                        <td><a href="{{ route('abonne.pdf',$Abonne->id)}}"><i class="fa fa-print" ></i></a>   </td>
                        <td><a href="{{ route('abonne.delete',$Abonne->id) }}" onclick="delete_confirmation()"><i class="fa fa-trash" ></i></a></td>
                        <td><a href="#"><i class="fa fa-edit" ></i></a></td>
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
                  </div>
            </div>
        </div>
               
              </div>
                  <div>
                  <a class="btn btn-primary btn-lg text-light stretched-link text-decoration-none " 
                    data-bs-toggle="modal" data-bs-target="#wnd" aria-haspopup="true" aria-expanded="false" role="button"  v-pre>
                     Ajouter Abonné
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
                            <input  type="date" class="form-control form-little-squirrel-control form-control-sm @error('date_naissance') is-invalid @enderror" name="date"required  autofocus>
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