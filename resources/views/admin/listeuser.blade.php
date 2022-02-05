@include('layouts.header')    
<div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand font-weight-bold" href="javascript:void(0)">Liste des Employés</a>
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
                  <h2 class="card-title text-center font-sans-serif">Liste Employés</h2>
                </div>
       

        
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>role</th>
                        <th>email</th>
                      <th>Supprimer</th>
                      <th>Modifier</th>
                      
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                      <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->prenom}}</td>
                        <td>{{$user->role}}</td>
                        <td>{{$user->email}}</td>
                        <td><a href="{{ route('user.delete',$user->id) }}" onclick="delete_confirmation()"><i class="fa fa-trash" ></i></a></td>
                        <td><a href="{{ route('user.update',$user->id) }}" data-bs-toggle="modal" data-bs-target="#user{{$user->id}}"><i class="fa fa-edit" ></i></a></td>
                      </tr>

                      <div class="modal" id="user{{$user->id}}">
                        <div class="modal-dialog modal-md">
                          <div class="modal-content">
          
                            <!-- Modal Header -->
                            <div class="modal-header">
                           
                              <h3 class="font-sans-serif text-center fw-bold fs-1 text-dark mx-auto ms-8"> Modifier les informations </h3>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"aria-label="Close"></button> 
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body mx-auto">
                              <div class="row align-items-center mb-3">
                              
                                
                          <form method="POST" action="{{ route('user.update',$user->id) }}" class="sign-up-form" onsubmit="return userformcheck(this)">
                @csrf
                  @method('PUT')
                  <div class="input-group-icon mb-3 "> 
                    <label class="form-label col-12" for="inputCategories">Nom</label>
                     <input id="name" type="text" class="form-control form-little-squirrel-control @error('name') is-invalid @enderror" placeholder="Nom" name="name" value="{{$user->name}}" autocomplete="name" autofocus/>
                     <i class="fas fa-user input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i> 
                  </div>
                  <div class="input-group-icon mb-3"> 
                    <label class="form-label col-12" for="inputCategories">Prénom</label>
                     <input id="prenom" type="text" class="form-control form-little-squirrel-control @error('prenom') is-invalid @enderror" placeholder="Prenom" name="prenom" value="{{$user->prenom}}"  autocomplete="prenom" autofocus>
                     <i class="fas fa-user input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i>
                  </div>
          
                  <div class="input-group-icon mb-3"> 
                    <label class="form-label col-12" for="inputCategories">Date de naissance</label>
                  <input  type="date" class="form-control form-little-squirrel-control form-control-sm @error('date_naissance') is-invalid @enderror" name="date"required  autofocus>
                  <i class="fas fa-calendar input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i>
                 </div>
                
                  <div class="input-group-icon mb-3"> 
                    <label class="form-label col-12" for="inputCategories">Email</label>
                   <input id="email" type="email" class="form-control form-little-squirrel-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{$user->email}}"  autocomplete="email">
                   <i class="fas fa-envelope input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i>
                  </div>
                  <div class="input-group-icon mb-3"> 
                    <label class="form-label col-12" for="inputCategories">Mot de passe</label>
                    <input id="password" type="password" class="form-control form-little-squirrel-control @error('password') is-invalid @enderror" placeholder="Mot de passe" name="password"  autocomplete="new-password">
                    <i class="fas fa-lock input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i>
                  </div>
                  <div class="input-group-icon mb-3"> 
                    <label class="form-label col-12" for="inputCategories"> Confirmer Mot de passe</label>
                    <input id="password_confirmation" type="password" class="form-control form-little-squirrel-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirmation Mot de pass" name="password_confirmation"  autocomplete="new-password">
                    <i class="fas fa-lock input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i>
                  </div>
                 
                  <div class="input-group-icon ms-3 mb-3 mt-7">
                    <button class="btn btn-primary form-little-squirrel-control" type="submit">Modifier Employé</button>
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
                       @endforeach
                    </tbody>
                  </table>
                  </div>
            </div>
        </div>
               
              </div>
                  <div>
                  <a class="btn btn-primary btn-lg font-weight-bold text-light fs--1 stretched-link text-decoration-none " 
                    data-bs-toggle="modal" data-bs-target="#wnd" aria-haspopup="true" aria-expanded="false" role="button"  v-pre>
                     Ajouter Gestionaire
           </a>
                   
                      </div>
            
           

    <div class="modal" id="wnd">
              <div class="modal-dialog modal-md">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                 
                    <h3 class="font-sans-serif text-center fw-bold fs-1 text-dark mx-auto ms-8"> Remplir les informations </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"aria-label="Close"></button> 
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body mx-auto">
                    <div class="row align-items-center mb-3">
                    
                      
                <form method="POST" action="{{ route('create') }}" class="sign-up-form" onsubmit="return userformcheck(this)">
      @csrf
        
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
          <label class="form-label col-12" for="inputCategories">Email</label>
         <input id="email" type="email" class="form-control form-little-squirrel-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}"  autocomplete="email">
         <i class="fas fa-envelope input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i>
        </div>
        <div class="input-group-icon mb-3"> 
          <label class="form-label col-12" for="inputCategories">Mot de passe</label>
          <input id="password" type="password" class="form-control form-little-squirrel-control @error('password') is-invalid @enderror" placeholder="Mot de passe" name="password"  autocomplete="new-password">
          <i class="fas fa-lock input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i>
        </div>
        <div class="input-group-icon mb-3"> 
          <label class="form-label col-12" for="inputCategories"> Confirmer Mot de passe</label>
          <input id="password_confirmation" type="password" class="form-control form-little-squirrel-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirmation Mot de pass" name="password_confirmation"  autocomplete="new-password">
          <i class="fas fa-lock input-box-icon mt-3" style="color:rgb(73, 73, 73)"></i>
        </div>
       
        <div class="input-group-icon ms-3 mb-3 mt-7">
          <button class="btn btn-primary form-little-squirrel-control" type="submit">Ajouter Employé</button>
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